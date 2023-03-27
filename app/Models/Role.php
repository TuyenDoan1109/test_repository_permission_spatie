<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['name', 'status'];

    public function permissions() {
        return $this->belongsToMany('App\Models\Permission', 'role_has_permissions');
    }

    public function admins() {
        return$this->belongsToMany('App\Models\Admin', 'model_has_roles', 'role_id', 'model_id');
    }
}
