<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourAdventures extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    protected $hidden = [

        'deleted_at',
        'user_id'
    ];
}
