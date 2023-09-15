<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function icon() {
        return $this->belongsTo(Icon::class,'icon_id','id');
    }
}
