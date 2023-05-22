<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];
    protected $table = 'icons';


    // public function location()
    // {
    //     return $this->belongsTo(location::class);
    //     // return $this->belongsTo(location::class, 'foreign_key');
    // }

    public function location()
    {
        return $this->hasMany(Location::class);
    }
}
