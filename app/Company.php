<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'Id';
    protected $table = 'Company';
    public $timestamps = false;
    protected $fillable = ['Code', 'Name', 'Description', 'Logo'];
}
