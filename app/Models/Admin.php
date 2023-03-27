<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable, SoftDeletes, HasRoles;
    protected $guard = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // One to One Relationship
//    public function info() {
//        return $this->hasOne('App\Models\AdminInfo');
//    }

    public function info() {
        return $this->hasOne('App\Models\AdminInfo', 'admin_id', 'id');
    }

    public function roles() {
        return $this->belongsToMany('App\Models\Role', 'model_has_roles', 'model_id', 'role_id');
    }
}
