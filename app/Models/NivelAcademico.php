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
 * Class NivelAcademico
 * 
 * @property int $id
 * @property string|null $nivel
 * @property string|null $area
 * @property string|null $institucao
 * @property string|null $descricao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Cidadao[] $cidadaos
 *
 * @package App\Models
 */
class NivelAcademico extends Model
{
	use SoftDeletes;
	protected $table = 'nivel_academico';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nivel',
		'area',
		'institucao',
		'descricao'
	];

	public function cidadaos()
	{
		return $this->belongsToMany(Cidadao::class, 'cidadao_has_nivel_academico')
					->withPivot('ano_conclusao', 'deleted_at')
					->withTimestamps();
	}
}
