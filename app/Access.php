<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    public $timestamps = false;
    protected $table = 'Access';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];
}
