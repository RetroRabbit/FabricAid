<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RoleAccess;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'Role';
    protected $primaryKey = 'Id';
    protected $fillable = ['Name'];
}
