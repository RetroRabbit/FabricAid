<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Status';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name'];
}
