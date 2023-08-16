<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Plant extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded  = ['id'];
    protected $table = 'plants';

    public function sluggable(): array
    {
        return [
            'slug_plant' => [
                'source' => 'local_name'
            ]
        ];
    }



}
