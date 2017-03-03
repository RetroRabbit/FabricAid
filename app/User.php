<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

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
        return $this->Password;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
