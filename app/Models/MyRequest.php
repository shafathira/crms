<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyRequest extends Model
{
    use HasFactory;

    public function coordinators()
    {
        return $this->belongsTo(User::class, 'Coor_id', 'id');
    }

    public function programmes()
    {
        return $this->belongsTo(Programme::class, 'programme_id', 'id');
    }

    public function semesters()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }

    public function groups()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function myrequestbridge()
    {
        return $this->hasMany(MyRequestBridge::class,'bridge_id','id');
    }
}
