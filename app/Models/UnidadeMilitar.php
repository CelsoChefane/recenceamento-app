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
 * Class UnidadeMilitar
 * 
 * @property int $id
 * @property string $nome
 * @property string|null $descricao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $provincia_id
 * @property int|null $destrito_id
 * @property int|null $cidade_id
 * 
 * @property Cidade|null $cidade
 * @property Destrito|null $destrito
 * @property Provincium|null $provincium
 * @property Collection|Alistamento[] $alistamentos
 *
 * @package App\Models
 */
class UnidadeMilitar extends Model
{
	use SoftDeletes;
	protected $table = 'unidade_militar';

	protected $casts = [
		'provincia_id' => 'int',
		'destrito_id' => 'int',
		'cidade_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'provincia_id',
		'destrito_id',
		'cidade_id'
	];

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function destrito()
	{
		return $this->belongsTo(Destrito::class);
	}

	public function provincium()
	{
		return $this->belongsTo(Provincium::class, 'provincia_id');
	}

	public function alistamentos()
	{
		return $this->hasMany(Alistamento::class);
	}
}
