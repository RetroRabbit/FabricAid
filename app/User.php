<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'User';
    public $timestamps = false;
    protected $fillable = ['FirstName', 'LastName', 'Email', 'Password', 'DateCreated'];

    public function scopeActive($request)
    {
        return $request->where('Active', true);
    }
}
