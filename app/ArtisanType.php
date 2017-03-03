<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtisanType extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'ArtisanType';
    public $timestamps = false;
    protected $table = 'ArtisanType';
    protected $primaryKey = 'Id';
    protected $fillable = ['Name'];
}
