<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $table = 'listing';

    // protected $fillable = ['name', 'description', 'location', 'address_file', 'featured_image'];

    public function amenities()
    {
        return $this->hasMany(amenities::class, 'listing_id', 'id');
    }

}
