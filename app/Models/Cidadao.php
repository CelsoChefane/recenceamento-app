<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cidadao
 * 
 * @property int $id
 * @property string $nome
 * @property string $apelido
 * @property string|null $sexo
 * @property Carbon|null $data_nascimento
 * @property string|null $estado_civil
 * @property string|null $tipo_doc
 * @property string|null $num_doc
 * @property string|null $telefone
 * @property string|null $email
 * @property string|null $endereco
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $provincia_id
 * @property int|null $destrito_id
 * @property int|null $documento_id
 * @property int|null $cidade_id
 * @property string|null $NIM
 * @property string|null $num_registo
 * 
 * @property Cidade|null $cidade
 * @property Destrito|null $destrito
 * @property Documento|null $documento
 * @property Provincium $provincium
 * @property Collection|Alistamento[] $alistamentos
 * @property Collection|NivelAcademico[] $nivel_academicos
 * @property Collection|ExameMedico[] $exame_medicos
 *
 * @package App\Models
 */
class Cidadao extends Model
{
	use SoftDeletes;
	protected $table = 'cidadao';

	protected $casts = [
		'data_nascimento' => 'datetime',
		'provincia_id' => 'int',
		'destrito_id' => 'int',
		'documento_id' => 'int',
		'cidade_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'apelido',
		'sexo',
		'data_nascimento',
		'estado_civil',
		'tipo_doc',
		'num_doc',
		'telefone',
		'email',
		'endereco',
		'provincia_id',
		'destrito_id',
		'documento_id',
		'cidade_id',
		'NIM',
		'num_registo'
	];

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function destrito()
	{
		return $this->belongsTo(Destrito::class);
	}

	public function documento()
	{
		return $this->belongsTo(Documento::class);
	}

	public function provincium()
	{
		return $this->belongsTo(Provincium::class, 'provincia_id');
	}

	public function alistamentos()
	{
		return $this->hasMany(Alistamento::class);
	}

	public function nivel_academicos()
	{
		return $this->belongsToMany(NivelAcademico::class, 'cidadao_has_nivel_academico')
					->withPivot('ano_conclusao', 'deleted_at')
					->withTimestamps();
	}

	public function exame_medicos()
	{
		return $this->hasMany(ExameMedico::class);
	}
}
