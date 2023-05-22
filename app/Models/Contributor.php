<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Contributor extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'contributors';
    protected $guarded  = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
    }
}
