<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function getAll ( ) {
        // GEt & Return all listings
        //return 'returning listings';
        $listings = listing::get();

        return response()->json([
            'status' => true,
            'message' => "listing Created successfully!",
            'listings' => $listings
        ]);
    }



    public function get($id) {
        // Get single listing details for the above id
       // return 'single'; 
        
        $listings = listing::with('amenities')->where('url',$id)->first();
        return $listings;
     }
}
