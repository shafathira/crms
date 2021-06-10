<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    public function groups()
    {
        return $this->hasMany(Group::class, 'programme_id', 'id');
    }

    public function coordinators()
    {
        return $this->belongsTo(User::class, 'Coor_id', 'id');
    }
}
