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
 * Class Destrito
 * 
 * @property int $id
 * @property string $nome
 * @property string|null $descricao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int $provincia_id
 * 
 * @property Provincium $provincium
 * @property Collection|CentroRecrutamento[] $centro_recrutamentos
 * @property Collection|Cidadao[] $cidadaos
 * @property Collection|UnidadeMilitar[] $unidade_militars
 *
 * @package App\Models
 */
class Destrito extends Model
{
	use SoftDeletes;
	protected $table = 'destrito';

	protected $casts = [
		'provincia_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'provincia_id'
	];

	public function provincium()
	{
		return $this->belongsTo(Provincium::class, 'provincia_id');
	}

	public function centro_recrutamentos()
	{
		return $this->hasMany(CentroRecrutamento::class);
	}

	public function cidadaos()
	{
		return $this->hasMany(Cidadao::class);
	}

	public function unidade_militars()
	{
		return $this->hasMany(UnidadeMilitar::class);
	}
}
