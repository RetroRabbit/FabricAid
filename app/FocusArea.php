<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FocusArea extends Model
{
    public $timestamps = false;
    protected $table = 'FocusArea';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];
}
