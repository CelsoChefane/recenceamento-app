<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CidadaoHasNivelAcademico
 * 
 * @property int $cidadao_id
 * @property int $nivel_academico_id
 * @property int|null $ano_conclusao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cidadao $cidadao
 * @property NivelAcademico $nivel_academico
 *
 * @package App\Models
 */
class CidadaoHasNivelAcademico extends Model
{
	use SoftDeletes;
	protected $table = 'cidadao_has_nivel_academico';
	public $incrementing = false;

	protected $casts = [
		'cidadao_id' => 'int',
		'nivel_academico_id' => 'int',
		'ano_conclusao' => 'int'
	];

	protected $fillable = [
		'ano_conclusao'
	];

	public function cidadao()
	{
		return $this->belongsTo(Cidadao::class);
	}

	public function nivel_academico()
	{
		return $this->belongsTo(NivelAcademico::class);
	}
}
