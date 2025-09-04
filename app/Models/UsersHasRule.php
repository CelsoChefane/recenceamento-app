<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsersHasRule
 * 
 * @property int $id
 * @property int $users_id
 * @property int $rule_id
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Rule $rule
 * @property User $user
 *
 * @package App\Models
 */
class UsersHasRule extends Model
{
	use SoftDeletes;
	protected $table = 'users_has_rule';

	protected $casts = [
		'users_id' => 'int',
		'rule_id' => 'int'
	];

	protected $fillable = [
		'users_id',
		'rule_id',
		'description'
	];

	public function rule()
	{
		return $this->belongsTo(Rule::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
