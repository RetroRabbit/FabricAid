<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Area';
    public $timestamps = false;
    protected $table = 'Area';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name', 'Location'];
}
