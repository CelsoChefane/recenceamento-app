<?php

namespace App\Http\Controllers\cidadao;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Provincium;
use Illuminate\Http\Request;

class cidadaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $d=0;
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

        return view('pages.cidadao.create_cidadao',compact('provincias','cidades','titulo','subtitulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
