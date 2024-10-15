<?php

namespace App\Http\Controllers\Web\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;

class GoogleSettingController extends Controller
{
    public function index(): View {
        return view('backend.layouts.settings.google_settings');
    }

    /**
     * Update stripe settings.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse {
        $request->validate([
            'GOOGLE_CLIENT_ID' => 'nullable|string',
            'GOOGLE_CLIENT_SECRET' => 'nullable|string',
            'GOOGLE_REDIRECT_URI' => 'nullable|string',
        ]);
        try {
            $envContent = File::get(base_path('.env'));
            $lineBreak  = "\n";
            $envContent = preg_replace([
                '/GOOGLE_CLIENT_ID=(.*)\s/',
                '/GOOGLE_CLIENT_SECRET=(.*)\s/',
                '/GOOGLE_REDIRECT_URI=(.*)\s/',
            ], [
                'GOOGLE_CLIENT_ID=' . $request->GOOGLE_CLIENT_ID . $lineBreak,
                'GOOGLE_CLIENT_SECRET=' . $request->GOOGLE_CLIENT_SECRET . $lineBreak,
                'GOOGLE_REDIRECT_URI=' . $request->GOOGLE_REDIRECT_URI . $lineBreak,
            ], $envContent);

            if ($envContent !== null) {
                File::put(base_path('.env'), $envContent);
            }
            return redirect()->back()->with('t-success', 'Google Setting Update successfully.');
        } catch (Exception) {
            return redirect()->back()->with('t-error', 'Google Setting Update Failed');
        }
    }
}
