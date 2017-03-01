<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtisanType extends Model
{
    public $timestamps = false;
    protected $fillable = ['Name'];
}
