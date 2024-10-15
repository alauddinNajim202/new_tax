<?php

namespace App\Http\Controllers\Web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('user_dashboard.layouts.index_client');
    }

    // client bookmark
    public function bookmark()
    {
        return view('user_dashboard.layouts.bookmarks');
    }


    // client booking

    public function booking()
    {
        return view('user_dashboard.layouts.bookings');
    }

    // client profile booking

    public function profile_booking()
    {
        return view('user_dashboard.layouts.profile-booking');
    }

    // client profile booking

    public function document_center()
    {
        return view('user_dashboard.layouts.document-center');
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
