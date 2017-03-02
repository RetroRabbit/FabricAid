<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "Company";
    protected $primaryKey = "Id";
    public $timestamps = false;
    protected $fillable = ['Code', 'Name', 'Description', 'Logo'];

    public function scopeActive($query)
    {
        return $query->where('Active', true);
    }
}
