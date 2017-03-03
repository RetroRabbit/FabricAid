<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Template';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name', 'Details'];
}
