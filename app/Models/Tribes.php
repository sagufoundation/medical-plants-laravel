<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tribes extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function plant() {
        return $this->hasMany(Plant::class,'id_tribe', 'id');
    }
    
}
