<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Tool';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name', 'Description'];
}
