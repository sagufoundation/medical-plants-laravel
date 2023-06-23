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

    public function contributor(){
        return $this->belongsTo(Contributor::class,'id_contributor');
    }

    public function location(){
        return $this->belongsTo(Location::class,'id_location');
    }

}
