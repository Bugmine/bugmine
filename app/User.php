<?php namespace Bugmine;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Bugmine\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Bugmine\Group[] $groups
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User whereUpdatedAt($value)
 * @property-read \Bugmine\Group $group
 * @property integer $group_id
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\User whereGroupId($value)
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function group()
	{
		return $this->belongsTo('Bugmine\Group');
	}

	/**
	 * @param $name
	 * @return bool
	 */
	public function hasPermission($name)
	{
		return $this->group->hasPermission($name);
	}
}