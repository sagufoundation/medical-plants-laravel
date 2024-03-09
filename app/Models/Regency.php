<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    use HasFactory;
    public $guarded = [];

    public function icon() {
        return $this->hasMany(Icon::class,'icon_id','id');
    }

    public function plant() {
        return $this->hasMany(Plant::class,'id_regency','id');
    }
}
