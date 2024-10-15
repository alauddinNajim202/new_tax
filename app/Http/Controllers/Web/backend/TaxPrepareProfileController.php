<?php

namespace App\Http\Controllers\Web\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TaxPrepare;
use App\Models\TaxPrepareAvailability;
use App\Models\TaxPrepareCertification;
use App\Models\TaxPrepareService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TaxPrepareProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function index()
    {

        return view('user_dashboard.layouts.profile-setup');
    }



    public function profile()
    {
        $user_id = auth()->user()->id;

        $tax_prepare = TaxPrepare::where('user_id', $user_id)->first();

        $service_categories = Category::orderBy('name', 'ASC')->get();
        $selected_categories = $tax_prepare->services()->pluck('category_id')->toArray();


        return view('user_dashboard.layouts.profile', compact('tax_prepare', 'service_categories','selected_categories'));
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

        // dd($request->all());

        $request->validate([
            'full_name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_address' => 'required|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $tax_prepare = new TaxPrepare();

        // // Update the tax preparer's information
        $tax_prepare->user_id = $request->input('tax_prepare_id');
        $tax_prepare->full_name = $request->input('full_name');
        $tax_prepare->business_name = $request->input('business_name');
        $tax_prepare->business_address = $request->input('business_address');
        $tax_prepare->professional_title = $request->input('professional_detail');
        $tax_prepare->years_of_experience = $request->input('year_of_experience');
        $tax_prepare->save();


        // certification file upload
        if ($request->hasFile('certification')) {
            TaxPrepareCertification::where('tax_prepare_id', $tax_prepare->id)->delete();
        }

        if ($request->hasFile('certification')) {

            foreach ($request->file('certification') as $certification) {
                $certification_name =  time() . 'tax_prepare' . '.' . $certification->getClientOriginalExtension();
                $destination_path = public_path('user_dashboard/tax_prepare/certification/', $certification_name);
                $certification->move($destination_path, $certification_name);
                $tax_prepare->certifications()->create(
                    [

                        'tax_prepare_id' => $tax_prepare->id,

                        'certification_file' => $certification_name
                    ]




                );
            }
        }

        // rate type

        if ($request->rate_type == 'hourly') {
            $tax_prepare->type_rate = 'hourly';
            $tax_prepare->from_rate = $request->from_price;
            $tax_prepare->to_rate = $request->to_price;
        }

        if ($request->rate_type == 'fixed') {
            $tax_prepare->type_rate = 'fixed';
            $tax_prepare->from_rate = 0;
            $tax_prepare->to_rate = 0;
        }




        $tax_prepare->save();

        return response()->json(
            [
            'status' => 'success',
            'message' => 'Profile picture updated successfully.',
            'route' => route("tax_prepare.profile.index")
            ]
        );
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
    public function update(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'full_name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'business_address' => 'required|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $tax_prepare = TaxPrepare::find($request->tax_prepare_id);
        // dd($tax_prepare);

        if (!$tax_prepare) {
            return response()->json(['status' => 'error', 'message' => 'Tax preparer not found.']);
        }

        // // Update the tax preparer's information
        $tax_prepare->full_name = $request->input('full_name');
        $tax_prepare->business_name = $request->input('business_name');
        $tax_prepare->business_address = $request->input('business_address');


        // profile image
        if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $image_name =  time() . 'tax_prepare' . '.' . $image->getClientOriginalExtension();

            $destination_path = public_path('user_dashboard/tax_prepare/images/', $image_name);

            $image->move($destination_path, $image_name);

            $tax_prepare->profile_photo = $image_name;
        }

        // service image
        if ($request->hasFile('service_photo')) {
            $image = $request->file('service_photo');
            $image_name =  time() . 'tax_prepare_service' . '.' . $image->getClientOriginalExtension();

            $destination_path = public_path('user_dashboard/tax_prepare/images/', $image_name);

            $image->move($destination_path, $image_name);

            $tax_prepare->service_photo = $image_name;
        }


        // certification file upload
        if ($request->hasFile('certification')) {
            TaxPrepareCertification::where('tax_prepare_id', $tax_prepare->id)->delete();
        }

        if ($request->hasFile('certification')) {

            foreach ($request->file('certification') as $certification) {
                $certification_name =  time() . 'tax_prepare' . '.' . $certification->getClientOriginalExtension();
                $destination_path = public_path('user_dashboard/tax_prepare/certification/', $certification_name);
                $certification->move($destination_path, $certification_name);
                $tax_prepare->certifications()->create(['certification_file' => $certification_name]);
            }
        }

        // rate type

        if ($request->rate_type == 'hourly') {
            $tax_prepare->type_rate = 'hourly';
            $tax_prepare->from_rate = $request->from_price;
            $tax_prepare->to_rate = $request->to_price;
        }

        if ($request->rate_type == 'fixed') {
            $tax_prepare->type_rate = 'fixed';
            $tax_prepare->from_rate = 0;
            $tax_prepare->to_rate = 0;
        }

        // availability day from_time and to_time



        // dd($request->days);

        // $tax_prepare->availibilities()->delete();
        if ($request->days) {
            TaxPrepareAvailability::where('tax_prepare_id', $tax_prepare->id)->delete();
        }
        foreach ($request->days as $key => $day) {
           $day =  $tax_prepare->availibilities()->create([
                'day' => $day,
                'from_time' => $request->from_time[$key],
                'to_time' => $request->to_time[$key],
            ]);
        }
        // dd($day);


        if ($request->service_categories) {
            TaxPrepareService::where('tax_prepare_id', $tax_prepare->id)->delete();
        }
        foreach ($request->service_categories as $service) {
           $day =  $tax_prepare->services()->create([
                'tax_prepare_id' => $tax_prepare->id,
                'category_id' => $service,
            ]);
        }


        $tax_prepare->save();

        return response()->json(
            [
            'status' => 'success',
            'message' => 'Profile picture updated successfully.',
            'route' => route("tax_prepare.profile.index")
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function tax_prepare_stepform()
    {

        return view('front_end.layouts.tax-preparer-stepform');
    }
}
