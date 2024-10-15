<?php

namespace App\Http\Controllers\Web\backend\Settings;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\SocialMediaSetting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SocialMediaController extends Controller {
    public function index() {
        $social_link = SocialMediaSetting::first();
        return view('backend.layouts.settings.social_media_setting', compact('social_link'));
    }

    public function update(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'twitter'    => 'nullable|url',
            'facebook'    => 'nullable|url',
            'youtube'    => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            SocialMediaSetting::where('id', $id)->update([
                'twitter'    => $request->twitter,
                'facebook'    => $request->facebook,
                'youtube'    => $request->youtube,
                'linkedin' => $request->linkedin,
            ]);

            return back()->with('t-success', 'Social media links updated successfully.');
        } catch (Exception $e) {
            return back()->with('t-error', $e->getMessage());
        }
    }


}
