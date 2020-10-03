<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * RELATIONSHIPS
     */
    public function endpoints()
    {
        return $this->hasMany(Endpoint::class, 'parent_id');
    }
}
