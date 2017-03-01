<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    public $timestamps = false;
    protected $fillable = ['Code', 'Name', 'Description'];
}
