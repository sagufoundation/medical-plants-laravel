<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plant extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function contributor() {
        return $this->belongsTo(Contributor::class,'id_contributor');
    }

    public function province() {
        return $this->belongsTo(Province::class,'id_province','id');
    }

    public function regency() {
        return $this->belongsTo(Regency::class,'id_regency','id');
    }
}
