<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $fillable = ['FirstName', 'LastName', 'Email', 'Password', 'DateCreated'];
}
