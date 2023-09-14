<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Location extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded  = ['id'];
    protected $table = 'locations';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'tribes'
            ]
        ];
    }

    // public function icon()
    // {
    //     return $this->hasMany(Icon::class);
    // }
}

