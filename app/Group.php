<?php namespace Bugmine;

use Illuminate\Database\Eloquent\Model;

/**
 * Bugmine\Group
 *
 * @property integer $id
 * @property string $name
 * @property boolean $isSystemGroup
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Bugmine\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\Bugmine\Permission[] $permissions
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Group whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Group whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Group whereIsSystemGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Group whereUpdatedAt($value)
 */
class Group extends Model {
	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users(){
		return $this->hasMany('Bugmine\User');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function permissions(){
		return $this->belongsToMany('Bugmine\Permission');
	}

	/**
	 * @param Permission $permission
	 */
	public function addPermission(Permission $permission) {
		$this->permissions()->attach($permission->id);
	}

	/**
	 * @param Permission $permission
	 */
	public function removePermission(Permission $permission) {
		$this->permissions()->detach($permission->id);
	}

	/**
	 * @param $name
	 * @return bool
	 */
	public function hasPermission($name) {
		$permission = Permission::whereName($name)->first();
		if($permission === null) {
			return false;
		}
		return $this->permissions->contains($permission->id);
	}
}
