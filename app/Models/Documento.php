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
 * Class Documento
 * 
 * @property int $id
 * @property string $nome
 * @property string $anexo_doc
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Cidadao[] $cidadaos
 *
 * @package App\Models
 */
class Documento extends Model
{
	use SoftDeletes;
	protected $table = 'documento';

	protected $fillable = [
		'nome',
		'anexo_doc'
	];

	public function cidadaos()
	{
		return $this->hasMany(Cidadao::class);
	}
}
