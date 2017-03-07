<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleAccess extends Model
{
    public $timestamps = false;
    protected $table = 'RoleAccess';
    protected $primaryKey = 'Id';
    protected $fillable = ['AccessId', 'RoleId'];
}
