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

       

        return view('user_dashboard.layouts.client-profile', compact('client'));
    }


    public function update(Request $request)
    {
        // Validate the request inputs, including the avatar image
        $request->validate([
            'city' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $client = new Client();

        $client->city = $request->input('city');

        if ($request->hasFile('avatar')) {

            $avatar = $request->file('avatar');
            $avatar_name = time() . '_client_avatar.' . $avatar->getClientOriginalExtension();
            $destination_path = public_path('user_dashboard/client/avatars/');
            $avatar->move($destination_path, $avatar_name);
            $client->avatar = $avatar_name;
        }

        $client->save();

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Profile updated successfully.',
                'route' => route("client.profile.profile")
            ]
        );
    }
}
