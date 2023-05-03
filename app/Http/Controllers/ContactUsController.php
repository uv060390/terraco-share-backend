<?php

namespace App\Http\Controllers;


use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function getAll( ) {
        
        $data = ContactUs::all();

        return response()->json([
            'status' => true,
            'message' => "Send Data Successfully!",
            'data' => $data
        ]);
    }
    // public function create()
    // {
    //     return view('admin.contactus.create');
    // }

    public function create(Request $request){

        $data = ContactUs::create($request->all());
        
        return response()->json([
            'status' => true,
            'message' => "Create contact successfully!",
            'data' => $data
        ], 200);

    }
   
}
