<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Access';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name'];
}
