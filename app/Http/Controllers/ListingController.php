<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Listing/Index',
            [
                'listings' =>Listing::all()
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $listing = new Listing();
        // $listing->beds = $request->beds;
        // $listing->baths = $request->baths;
        // $listing->area = $request->area;
        // $listing->city = $request->city;
        // $listing->code = $request->code;
        // $listing->street = $request->street;
        // $listing->street_no = $request->street_no;
        // $listing->price = $request->price;
        // $listing->save();
        // return redirect()->route('listing.index');

        Listing::create(
            $request->validate([
                'beds' => 'required|integer',
                'baths' => 'required|integer',
                'area' => 'required|integer',
                'city' => 'required|string',
                'code' => 'required|string',
                'street' => 'required|string',
                'street_no' => 'required|string',
                'price' => 'required|integer',
            ])
        );
        return redirect()->route('listing.index')
        ->with('success', 'Listing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia(
            'Listing/Show',
            [
                'listing' => $listing
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //dd($listing);
        return inertia(
            'Listing/Edit',
            [
                'listing' => $listing
            ]
            );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $listing->update(
            $request->validate([
                'beds' => 'required|integer',
                'baths' => 'required|integer',
                'area' => 'required|integer',
                'city' => 'required|string',
                'code' => 'required|string',
                'street' => 'required|string',
                'street_no' => 'required|string',
                'price' => 'required|integer',
            ])

        );


        return redirect()->route('listing.index')
        ->with('success', 'Listing Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect()->back()
        ->with('success', 'Listing Update successfully.');

    }
}
