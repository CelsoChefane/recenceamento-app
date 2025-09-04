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
 * Class CentroRecrutamento
 *
 * @property int $id
 * @property string $nome
 * @property string|null $sigla
 * @property string|null $email
 * @property string|null $descricao
 * @property string|null $endereco
 * @property string|null $telefone
 * @property int|null $cidade_id
 * @property int|null $destrito_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Cidade|null $cidade
 * @property Destrito|null $destrito
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class CentroRecrutamento extends Model
{
	use SoftDeletes;
	protected $table = 'centro_recrutamento';

	protected $casts = [
		'cidade_id' => 'int',
		'destrito_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'sigla',
		'email',
		'descricao',
		'endereco',
		'telefone',
		'cidade_id',
		'destrito_id'
	];

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function destrito()
	{
		return $this->belongsTo(Destrito::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
