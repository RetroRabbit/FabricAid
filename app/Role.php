<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RoleAccess;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'Role';
    protected $primaryKey = 'Id';
    protected $fillable = ['Name'];

    public function scopeAdministrator($query)
    {
        return $query->where('Name', 'Administrator')->first();
    }

    public function scopeSupervisor($query)
    {
        return $query->where('Name', 'Supervisor')->first();
    }

    public function scopeArtisan($query)
    {
        return $query->where('Name', 'Artisan')->first();
    }
}
