<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alistamento
 * 
 * @property int $id
 * @property int $cidadao_id
 * @property int $unidade_militar_id
 * @property int|null $ano
 * @property string|null $situacao
 * @property Carbon|null $data_alistamento
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cidadao $cidadao
 * @property UnidadeMilitar $unidade_militar
 *
 * @package App\Models
 */
class Alistamento extends Model
{
	use SoftDeletes;
	protected $table = 'alistamento';

	protected $casts = [
		'cidadao_id' => 'int',
		'unidade_militar_id' => 'int',
		'ano' => 'int',
		'data_alistamento' => 'datetime'
	];

	protected $fillable = [
		'cidadao_id',
		'unidade_militar_id',
		'ano',
		'situacao',
		'data_alistamento'
	];

	public function cidadao()
	{
		return $this->belongsTo(Cidadao::class);
	}

	public function unidade_militar()
	{
		return $this->belongsTo(UnidadeMilitar::class);
	}
}
