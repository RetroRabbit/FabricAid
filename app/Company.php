<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
<<<<<<< HEAD
    protected $primaryKey = 'Id';
    protected $table = 'Company';
=======
    protected $table = "Company";
    protected $primaryKey = "Id";
>>>>>>> master
    public $timestamps = false;
    protected $table = 'Company';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name', 'Description', 'Logo'];

    public function scopeActive($query)
    {
        return $query->where('Active', true);
    }
}
