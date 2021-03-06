<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Hash;

use App\Role;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    public $timestamps = false;
    protected $table = 'User';
    protected $primaryKey = 'Id';
    protected $fillable = ['FirstName', 'LastName', 'Email', 'Password', 'DateCreated'];
    protected $hidden = ['Password', 'remember_token'];

    public function getAuthPassword()
    {
        return $this->attributes['Password'];
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['Password'] = Hash::make($password);
    }

    public function scopeActive($query)
    {
        return $query->where('Active', true);
    }

    public function scopeInActive($query)
    {
        return $query->where('Active', false);
    }

    public function scopeOfRole($query, $roleId)
    {
        return $query->where('RoleId', $roleId);
    }

    public function isAdmin()
    {
        return $this->RoleId == Role::administrator()->Id;
    }

    public function isSupervisor()
    {
        return $this->RoleId == Role::supervisor()->Id;
    }

    public function isArtisan()
    {
        return $this->RoleId == Role::artisan()->Id;
    }
}
