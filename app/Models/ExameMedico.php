<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ExameMedico
 * 
 * @property int $id
 * @property Carbon $data_exame
 * @property int $cidadao_id
 * @property string|null $resultado
 * @property string|null $observacao
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Cidadao $cidadao
 *
 * @package App\Models
 */
class ExameMedico extends Model
{
	use SoftDeletes;
	protected $table = 'exame_medico';

	protected $casts = [
		'data_exame' => 'datetime',
		'cidadao_id' => 'int'
	];

	protected $fillable = [
		'data_exame',
		'cidadao_id',
		'resultado',
		'observacao'
	];

	public function cidadao()
	{
		return $this->belongsTo(Cidadao::class);
	}
}
