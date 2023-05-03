<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    use HasFactory;
     protected $fillable = ['name', 'icon', 'listing_id', 'icon_url'];





    public function listing()
    {
        return $this->belongsTo(Listing::class, 'id', 'listing_id');
    }
}

// #TODO: Listing & Amenities name will be capital