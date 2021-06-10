<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function programmes()
    {
        return $this->belongsTo(Programme::class, 'programme_id', 'id');
    }
}
