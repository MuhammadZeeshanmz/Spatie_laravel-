<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use HasFactory,  HasRoles, Notifiable;

    
    protected $guard_name = 'api';

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    // public function roles(): MorphMany
    // {
    //     return $this->hasMany(Role::class, 'model', 'model_has_roles', 'model_id', 'role_id');
    // }

    // public function permissions()
    // {
    //     return $this->MorphToMany(Permission::class, 'model', 'model_has_permission', 'model_id', 'permission_id');
    // }
}
