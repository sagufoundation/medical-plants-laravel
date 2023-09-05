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

<<<<<<< HEAD

=======
    public function contributor(){
        return $this->belongsTo(Contributor::class,'id_contributor');
    }

    public function location(){
        return $this->belongsTo(Location::class,'id_location');
    }

    public function province(){
        return $this->belongsTo(Provinces::class,'id_province');
    }
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a

}
