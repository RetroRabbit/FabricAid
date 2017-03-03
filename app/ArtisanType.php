<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtisanType extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'ArtisanType';
    public $timestamps = false;
    protected $fillable = ['Name'];
}
