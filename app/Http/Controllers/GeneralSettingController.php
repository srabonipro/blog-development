<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $general = GeneralSetting::get()->first();
        return view('backend.setting.general', compact('general'));
    }

    public function generalSettingUpdate(Request $request, GeneralSetting $generalSetting)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'youtube' => 'nullable|url',
            'about' => 'required|string|max:65535',
            'copywrite' => 'required|string|max:65535',
        ]);

        $generalSetting->facebook = $request->facebook;
        $generalSetting->twitter = $request->twitter;
        $generalSetting->instagram = $request->instagram;
        $generalSetting->linkedin = $request->linkedin;
        $generalSetting->youtube = $request->youtube;
        $generalSetting->about = $request->about;
        $generalSetting->copywrite = $request->copywrite;
        $generalSetting->update();

        toast('General Settings Updated Successfully!', 'success');
        return back();
    }
}
