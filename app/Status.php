<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    protected $table = 'Status';
    protected $primaryKey = 'Id';
    protected $fillable = ['Code', 'Name'];

    public function scopeInactive($query)
    {
        return $query->where('Name', 'Inactive');
    }

    public function scopeActive($query)
    {
        return $query->whereIn('Name', ['Pending', 'Running', 'On-Hold']);
    }

    public function scopeCompleted($query)
    {
        return $query->where('Name', 'Completed');
    }
}
