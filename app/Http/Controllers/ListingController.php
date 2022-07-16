<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    if(request()->hasFile('logo')){

        $fields['logo'] = $request->file('logo')->store('logos', 'public');;

    }
    
    $fields['user_id'] = auth()->id();
        
    Listing::create($fields);

    return redirect('/')->with('message', 'Listing created successfully.');
    }



    public function edit(Listing $listing){
        return view('edit', ['listing' => $listing]);
    }


    public function update(Request $request, Listing $listing){
        $fields =  $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if(request()->hasFile('logo')){

            $fields['logo'] = $request->file('logo')->store('logos', 'public');;

        }

        $listing->update($fields);

        return back()->with('message', 'Listing updated successfully.');
    }

    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully.');
    }

    public function manage(){
        return view('manage', [
            'listings' => Listing::all()->where('user_id','=', auth()->id())
        ]);
    }

}
