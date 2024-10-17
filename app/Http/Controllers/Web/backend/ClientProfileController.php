<?php

namespace App\Http\Controllers\Web\backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientProfileController extends Controller
{




    public function profile()
    {
        $user_id = auth()->user()->id;

        $client = Client::where('user_id', $user_id)->first();
        //   $client_city = Client::where('city')->first();



        return view('user_dashboard.layouts.client-profile', compact('client'));
    }


    // public function update(Request $request)
    // {

    //     $request->validate([
    //         'city' => 'required|string|max:255',
    //        // 'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $user_id = auth()->user()->id;

    //     $client = Client::where('user_id', $user_id)->first();

    //     // $client->city = $request->input('city');


    //     // if ($request->hasFile('avatar')) {
    //     //     $avatar = $request->file('avatar');
    //     //     $avatar_name = time() . '_client_avatar.' . $avatar->getClientOriginalExtension();
    //     //     $destination_path = public_path('user_dashboard/client/avatars/');

    //     //     $avatar->move($destination_path, $avatar_name);

    //     //     $client->avatar = $avatar_name;
    //     // }

    //     $client->save();

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Profile updated successfully.',
    //         'route' => route("client.profile.profile")
    //     ]);
    // }



    public function update(Request $request)
    {

        // dd($request->all());
        // Validate the request data first
        $request->validate([
            'city' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate avatar
        ]);

        // Retrieve the authenticated user's ID
        $user_id = auth()->user()->id;


        $client = Client::where('user_id', $user_id)->first();


        // profile image
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $image_name =  time() . 'client' . '.' . $image->getClientOriginalExtension();


            $destination_path = public_path('user_dashboard/client/avatars/', $image_name);

            $image->move($destination_path, $image_name);

            $client->avatar = $image_name;
            $client->save();
            // dd($client);
        }

        $client->city = $request->city;
        $client->save();


        // if ($client) {
        //     // Update the client
        //     $client->update($request->all());
        // } else {
        //     // If no client exists,
        //     $client = Client::updateOrCreate(
        //         ['user_id' => $user_id],
        //         ['city' => $request->city, 'avatar' => $request->avatar]
        //     );
        // }

        // Redirect back with a success message
      //   return redirect()->back()->with('success', 'Profile updated successfully.');


        return response()->json([
            'status' => 'success',
            'message' => 'Profile updated successfully.',
            'route' => route("client.profile.update")
        ]);


    }
}
