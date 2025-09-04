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
 * Class Rule
 * 
 * @property int $id
 * @property string|null $rule
 * @property string|null $level
 * @property string|null $priority
 * @property string|null $description
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Rule extends Model
{
	use SoftDeletes;
	protected $table = 'rule';

	protected $fillable = [
		'rule',
		'level',
		'priority',
		'description',
		'status'
	];

	public function users()
	{
		return $this->belongsToMany(User::class, 'users_has_rule', 'rule_id', 'users_id')
					->withPivot('id', 'description', 'deleted_at')
					->withTimestamps();
	}
}
