<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;
    protected $table = 'Area';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name', 'Location'];
}
