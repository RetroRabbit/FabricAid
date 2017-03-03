<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Tool';
    public $timestamps = false;
    protected $table = 'Tool';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name', 'Description'];
}
