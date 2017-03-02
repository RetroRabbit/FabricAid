<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    protected $table = 'Company';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name', 'Description', 'Logo'];
}
