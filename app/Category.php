<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Category';
    public $timestamps = false;
    protected $table = 'Category';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];
}
