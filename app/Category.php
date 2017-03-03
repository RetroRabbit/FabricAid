<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Category';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name'];
}
