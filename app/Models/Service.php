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


    public function seo()
    {
        return $this->hasMany(Seo::class);
    }


    public function choose()
    {
        return $this->hasMany(ServiceChoose::class);
    }


    public function serviceHeader()
    {
        return $this->hasMany(ServiceHeader::class);
    }


    public function serviceBefore()
    {
        return $this->hasMany(ServiceBefore::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
    public function serviceAddon()
    {
        return $this->hasMany(ServiceAddon::class);
    }

    public function serviceBest()
    {
        return $this->hasMany(ServiceBest::class);
    }

    public function serviceBenefit()
    {
        return $this->hasMany(ServiceBenefit::class);
    }
}
