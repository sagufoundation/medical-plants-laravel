<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourMessages extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];
    protected $table = 'tour_messages';
}
