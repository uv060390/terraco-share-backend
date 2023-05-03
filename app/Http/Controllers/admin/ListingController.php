<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\amenities;
use App\Models\ContactUs;
use App\Models\Listing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\Facades\DataTables;


class ListingController extends Controller
{
    private function processData(Listing $modal, Request $request): Listing
    {
        if ($request->has('name')) {
            $modal->name = $request->name;
        }

        if ($request->has('description')) {
            $modal->description = $request->description;
        }

        if ($request->has('location')) {
            $modal->location = $request->location;
        }

        if ($request->has('url')) {
            $modal->url = $request->url;
        }

        if ($request->has('price')) {
            $modal->price = $request->price;
        }

        if ($request->has('discount')) {
            $modal->discount = $request->discount;
        }

        if ($request->has('no_of_bedrooms')) {
            $modal->no_of_bedrooms = $request->no_of_bedrooms;
        }

        if ($request->has('no_of_bathrooms')) {
            $modal->no_of_bathrooms = $request->no_of_bathrooms;
        }

        if ($request->has('area')) {
            $modal->area = $request->area;
        }

        if ($request->has('super_builtup_area')) {
            $modal->super_builtup_area = $request->super_builtup_area;
        }

        if ($request->has('developer')) {
            $modal->developer = $request->developer;
        }

        if ($request->has('estimate')) {
            $modal->estimate = $request->estimate;
        }

        if ($request->has('project')) {
            $modal->project = $request->project;
        }

        if ($request->has('status')) {
            $modal->status = $request->status;
        }

        if ($request->hasFile('broucher')) {
            $modal->broucher = $this->processImage($request->file('broucher'));
        }

        if ($request->has('price_breakup')) {
            $modal->price_breakup = $request->price_breakup;
        }

        if ($request->has('possession_date')) {
            $modal->possession_date = $request->possession_date;
        }

        if ($request->has('booking_date')) {
            $modal->booking_date = $request->booking_date;
        }

        if ($request->has('rera_id')) {
            $modal->rera_id = $request->rera_id;
        }

        if ($request->has('mini_investment')) {
            $modal->mini_investment = $request->mini_investment;
        }

        if ($request->has('address')) {
            $modal->address = $request->address;
        }

        if ($request->has('payment_structure')) {
            $modal->payment_structure = $request->payment_structure;
        }

        if ($request->has('attached_title')) {
            $modal->attached_title = $request->attached_title;
        }

        if ($request->has('address_description')) {
            $modal->address_description = $request->address_description;
        }

        if ($request->hasFile('address_file')) {
            $modal->address_file = $this->processImage($request->file('address_file'));
        }

        if ($request->hasFile('featured_image')) {
            $modal->featured_image = $this->processImage($request->file('featured_image'));
        }

        return $modal;
    }

    private function processImage($image)
    {
        $name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
        $destinationPath = storage_path('app/public/upload/listing/');
        $image->move($destinationPath, $name);
        return $name;
    }

    public function index()
    {
        $datas = Listing::with('amenities')->get();
        return view('admin.listing.index', compact('datas'));
    }

    public function dataTables(Request $request)
    {
        $data = Listing::with('amenities')->get();
        //--- Integrating This Collection Into Datatables
        return DataTables::of($data)->toJson(); //--- Returning Json Data To Client Side
    }

    public function contactUs(Request $request){
        $datas = ContactUs::with('listing')->orderBy('id','desc')->get();
        return view('admin.contactus', compact('datas'));
    }

    public function create()
    {
        return view('admin.listing.create');
    }

    public function edit($id)
    {
        $listing = Listing::where('id', $id)->with('amenities')->first();
        return view('admin.listing.edit', compact('listing'));
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'featured_image' => 'required',
        //     'url' => 'required|unique:listing',
        // ]);

        $model = new Listing();
        $model = $this->processData($model, $request);
        $model->save();
        // - #TODO Save amenities data 
        if ($request->has('amenities') && count($request->amenities) > 0) {
            $delete_prev = Amenities::where('listing_id', $model->id)->delete();
            foreach ($request->amenities as $key => $value) {
                $amenities = Amenities::create([
                    'listing_id' => $model->id,
                    'name' => $value['name'],
                    'icon' => $value['icon']
                ]);
            }
        }
        return redirect()->route('admin.list');
    }


    public function update($id, Request $request)
    {
        $model = Listing::findOrFail($id);
        $model = $this->processData($model, $request);
        $model->update();
        // - #TODO Update amenities data
        if ($request->has('amenities') && count($request->amenities) > 0) {
            $delete_prev = Amenities::where('listing_id', $model->id)->delete();
            foreach ($request->amenities as $key => $value) {
                $amenities = Amenities::create([
                    'listing_id' => $model->id,
                    'name' => $value['name'],
                    'icon' => $value['icon']
                ]);
            }
        }
        return redirect()->route('admin.list');
    }


    public function delete($id, Request $request)
    {
        $model = Listing::findOrFail($id);
        $model = $this->processData($model, $request);
        $model->delete();
        // - #TODO Delete amenities data




        return redirect()->route('admin.list');
    }
}