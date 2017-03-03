<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Machine';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name'];
}
