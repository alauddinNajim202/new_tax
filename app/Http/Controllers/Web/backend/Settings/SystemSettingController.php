<?php

namespace App\Http\Controllers\Web\backend\Settings;


use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class SystemSettingController extends Controller {
    /**
     * Display the system settings page.
     *
     * @return View
     */
    public function index(): View {
        $setting = SystemSetting::latest('id')->first();
        return view('backend.layouts.settings.system_settings', compact('setting'));
    }

    /**
     * Update the system settings.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse {
        $validator = Validator::make($request->all(), [
            'title'          => 'nullable|string',
            'email'    => 'nullable|string',
            'phone'    => 'nullable|string',
            'address'    => 'nullable|string',
            'map'    => 'nullable|string',
            'system_name'    => 'nullable|string',
            'copyright_text' => 'nullable|string',
            'footer_logo'           => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'logo'           => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'favicon'        => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'description'    => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = SystemSetting::first();

        try {
            $setting                 = SystemSetting::firstOrNew();
            $setting->title          = $request->title;
            $setting->email          = $request->email;
            $setting->phone          = $request->phone;
            $setting->address          = $request->address;
            $setting->map          = $request->map;
            $setting->system_name    = $request->system_name;
            $setting->copyright_text = $request->copyright_text;
            $setting->footer_logo           = $request->footer_logo;
            $setting->logo           = $request->logo;
            $setting->favicon        = $request->favicon;
            $setting->description    = $request->description;

            if ($request->hasFile('logo')) {

                $previousImagePath = public_path($setting->logo);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }

                $setting->logo = uploadImage($request->file('logo'), 'logo');
            }else {
                $setting->logo = $data->logo;
            }

            if ($request->hasFile('footer_logo')) {

                $previousImagePath = public_path($setting->footer_logo);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }

                $setting->footer_logo = uploadImage($request->file('footer_logo'), 'Footer Logo');
            }else {
                $setting->footer_logo = $data->footer_logo;
            }

            if ($request->hasFile('favicon')) {

                $previousImagePath = public_path($setting->favicon);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }

                $setting->favicon = uploadImage($request->file('favicon'), 'favicon');
            }else {
                $setting->favicon = $data->favicon;
            }

            $setting->save();
            return back()->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return back()->with('t-error', $e->getMessage());
        }
    }
}
