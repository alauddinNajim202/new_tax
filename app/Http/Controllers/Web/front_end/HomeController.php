<?php

namespace App\Http\Controllers\Web\front_end;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TaxPrepare;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front_end.layouts.home');
    }


    public function join()
    {
        return view('front_end.layouts.join');
    }

    public function join_tax_prepare()
    {
        return view('front_end.layouts.join-as-preparer');
    }

    public function start_questions()
    {
        return view('front_end.layouts.start-questions');
    }


    public function category(){
        return view('front_end.layouts.categories');
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
