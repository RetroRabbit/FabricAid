<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false;
    protected $table = 'Type';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];
}
