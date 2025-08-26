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
 * Class Provincium
 * 
 * @property int $id
 * @property string $nome
 * @property string|null $descricao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Cidadao[] $cidadaos
 * @property Collection|Cidade[] $cidades
 * @property Collection|Destrito[] $destritos
 * @property Collection|UnidadeMilitar[] $unidade_militars
 *
 * @package App\Models
 */
class Provincium extends Model
{
	use SoftDeletes;
	protected $table = 'provincia';

	protected $fillable = [
		'nome',
		'descricao'
	];

	public function cidadaos()
	{
		return $this->hasMany(Cidadao::class, 'provincia_id');
	}

	public function cidades()
	{
		return $this->hasMany(Cidade::class, 'provincia_id');
	}

	public function destritos()
	{
		return $this->hasMany(Destrito::class, 'provincia_id');
	}

	public function unidade_militars()
	{
		return $this->hasMany(UnidadeMilitar::class, 'provincia_id');
	}
}
