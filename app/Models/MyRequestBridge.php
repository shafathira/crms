<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyRequestBridge extends Model
{
    use HasFactory;

    public function myrequest()
    {
        return $this->belongsTo(MyRequest::class,'bridge_id','id');
    }
}
