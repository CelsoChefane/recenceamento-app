<?php

namespace App\Http\Controllers\cidadao;

use App\Http\Controllers\Controller;
use App\Models\Cidadao;
use App\Models\Cidade;
use App\Models\Provincium;
use Carbon\Carbon;
use Illuminate\Http\Request;

class cidadaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cidadaos = Cidadao::all();
        $titulo = "Cidadão";
        $subtitulo = "Lista";

        // dd($cidadaos->first()->provincium);

        return view('pages.cidadao.list_cidadao', compact('cidadaos', 'titulo', 'subtitulo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $provincias = Provincium::all();
        $cidades = Cidade::all();
        $titulo = "Cidadão";
        $subtitulo = "create";

        return view('pages.cidadao.create_cidadao', compact('provincias', 'cidades', 'titulo', 'subtitulo'));
    }

    public function getCity()
    {
        $province_id = Request('province');
        $cidades = Cidade::where('provincia_id', $province_id)->get();
        $option = "<option selected disabled value=''>Selecione Cidade...</option>";

        foreach ($cidades as $cidade) {
            $option = '<option value="' . $cidade->id . '">
                ' . $cidade->nome . '
            </option>';
        }
        return $option;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // '',
        // '',
        // '',
        // '',
        // '',
        // 'tipo_doc',
        // 'num_doc',
        // '',
        // '',
        // '',
        // '',
        // 'destrito_id',
        // 'documento_id',
        // ''
        $provincia = Provincium::find($request->province);
        $cidade = Cidade::find($request->cidade);

$data = new Carbon($request->dataNascimento);
$formattedDate = $data->format('d/m/Y');

// dd($formattedDate);
        $table = new Cidadao();
        $table->nome = $request->nome;
        $table->apelido = $request->apelido;
        $table->sexo = $request->sexo;
        $table->data_nascimento = $request->formattedDate;
        $table->estado_civil = $request->estado_civil;
        $table->telefone = $request->contacto;
        $table->email = $request->email;
        $table->endereco = $request->endereco;
        $table->NIM = $request->nim;
        $table->num_registo = $request->NRegisto;
        $table->provincium()->associate($provincia);
        $table->cidade()->associate($cidade);
        $table->save();


        $provincias = Provincium::all();
        $cidades = Cidade::all();
        $titulo = "Cidadão";
        $subtitulo = "create";

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cidadao = Cidadao::find($id);

        return view('pages.cidadao.detail_cidadao', compact('cidadao'));
    }


    public function declaracao(string $id)
    {
        //
        $cidadao = Cidadao::find($id);

        return view('pages.PDFpages.declaracao_militar', compact('cidadao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
