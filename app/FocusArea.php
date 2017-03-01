<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FocusArea extends Model
{
    public $timestamps = false;
    protected $fillable = ['Code', 'Name'];
}
