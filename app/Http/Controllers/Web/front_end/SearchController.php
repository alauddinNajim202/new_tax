<?php

namespace App\Http\Controllers\Web\front_end;

use App\Http\Controllers\Controller;
use App\Models\TaxPrepare;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search_locations(Request $request){
        // dd($request->all());

        $search = $request->city;

        $tax_prepare  = TaxPrepare::where('business_address', 'LIKE',"%{$search}%")->get();

        return $tax_prepare;
    }

    public function search_results(Request $request){
        // dd($request->address);

        $search = $request->address;


        $firstWord = explode(' ', trim($search))[0];

        $tax_prepare = TaxPrepare::where(function ($query) use ($firstWord) {
            $query->where('business_address', 'LIKE', "{$firstWord}%") // Start with the first word, case-insensitive
                  ->orWhere('business_address', 'LIKE', "%{$firstWord}%"); // Contains the first word, case-insensitive
        })
        ->get();


        // dd($tax_prepare);

        return view('front_end.layouts.tax_prepare_list');
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
