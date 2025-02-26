<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
