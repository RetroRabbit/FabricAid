<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Status';
    public $timestamps = false;
    protected $table = 'Status';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];
}
