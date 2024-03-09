<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Icon extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function location() {
        return $this->hasMany(Location::class,'icon_id','id');
    }
}
