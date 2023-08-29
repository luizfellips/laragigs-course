<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    // show create form
    
    public function create(){
        return view('listings.create');
    }
    // show create form
    
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required',Rule::unique('listings')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email', Rule::unique('listings')],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);
        
        return redirect('/')->with('message','Listing created successfully!');
        
    }


    // show single listing

    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    
    
    

}
