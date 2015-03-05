<?php namespace Bugmine;

use Illuminate\Database\Eloquent\Model;

/**
 * Bugmine\Permission
 *
 * @property integer $id
 * @property string $name
 * @property string $category
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Bugmine\Group[] $groups
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Permission whereCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Bugmine\Permission whereUpdatedAt($value)
 */
class Permission extends Model {
	public function groups(){
		return $this->belongsToMany('Bugmine\Group');
	}
}
