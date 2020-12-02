<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $user_name
 * @property string $password
 * @property string $team_name
 * @property string $user_role
 */
class Users extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_name', 'password', 'team_name', 'user_role'];

}
