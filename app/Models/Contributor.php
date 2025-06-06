<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contributor extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function plant() {
        return $this->hasMany(Plant::class);
    }
}
