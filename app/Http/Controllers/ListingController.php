<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index(Request $request){
        return view('listings', [
            'listings' => Listing::filterIt($request)
        ]);
    }

    public function show(Listing $listing){

            return view('listing', [
                'listing' => $listing
            ]);

    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
    $fields =  $request->validate([
        'title' => 'required',
        'company' => ['required', Rule::unique('listings', 'company')],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email', Rule::unique('listings', 'email')],
        'tags' => 'required',
        'description' => 'required'
    ]);

    Listing::create($fields);

    return redirect('/')->with('message', 'Listing created successfully.');
    }


}
