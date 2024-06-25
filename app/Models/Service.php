<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function gallery()
    {
        return $this->hasMany(ServiceGallery::class);
    }

    public function video()
    {
        return $this->hasMany(ServiceVideo::class);
    }
}
