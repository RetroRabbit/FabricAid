<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'Role';
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $table = 'Role';
    protected $primaryKey = 'Id';
    protected $fillable = ['Name'];
}
