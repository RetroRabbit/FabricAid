<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Type';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name'];
}
