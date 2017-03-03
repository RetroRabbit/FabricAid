<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Area';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name', 'Location'];
}
