<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleAccess extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'RoleAccess';
    public $timestamps = false;
    protected $fillable = ['AccessId', 'RoleId'];
}
