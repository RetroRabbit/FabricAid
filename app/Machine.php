<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public $timestamps = false;
    protected $table = 'Machine';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];
}
