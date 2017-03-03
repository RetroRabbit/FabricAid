<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Type';
    public $timestamps = false;
    protected $table = 'Type';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];
}
