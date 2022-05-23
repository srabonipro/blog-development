<?php

namespace App\Http\Controllers;

use App\Models\AboutSetting;
use Illuminate\Http\Request;

class AboutSettingController extends Controller
{
    public function index()
    {
        $about = AboutSetting::get()->first();
        return view('backend.setting.about', compact('about'));
    }

    public function update(Request $request, AboutSetting $aboutSetting)
    {
        $request->validate([
            'title1' => 'required|string|max:255',
            'title2' => 'required|string|max:255',
            'team_title' => 'required|string|max:255',
            'banner' => 'nullable|mimes:jpg,jpeg,png',
            'image1' => 'nullable|mimes:jpg,jpeg,png',
            'image2' => 'nullable|mimes:jpg,jpeg,png',
            'description' => 'required|string|max:65535',
            'description1' => 'required|string|max:65535',
            'description2' => 'required|string|max:65535',
            'team_description' => 'required|string|max:65535',
        ]);

        // Save Banner Image
        if ($request->banner) {
            // Remove old image
            if (file_exists(public_path($request->old_banner))) {
                unlink(public_path($request->old_banner));
            }

            // Save new image
            $image = $request->banner;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/about-setting/', $image_new_name);
            $aboutSetting->banner = '/storage/about-setting/' . $image_new_name;
            $aboutSetting->save();
        }

        // Save First Section Image
        if ($request->image1) {
            // Remove old image
            if (file_exists(public_path($request->old_image1))) {
                unlink(public_path($request->old_image1));
            }

            // Save new image
            $image = $request->image1;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/about-setting/', $image_new_name);
            $aboutSetting->image1 = '/storage/about-setting/' . $image_new_name;
            $aboutSetting->save();
        }

        // Save Last Section Image
        if ($request->image1) {
            // Remove old image
            if (file_exists(public_path($request->old_image1))) {
                unlink(public_path($request->old_image1));
            }

            // Save new image
            $image = $request->image2;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/about-setting/', $image_new_name);
            $aboutSetting->image2 = '/storage/about-setting/' . $image_new_name;
            $aboutSetting->save();
        }

        $aboutSetting->title1 = $request->title1;
        $aboutSetting->title2 = $request->title2;
        $aboutSetting->team_title = $request->team_title;
        $aboutSetting->description = $request->description;
        $aboutSetting->description1 = $request->description1;
        $aboutSetting->description2 = $request->description2;
        $aboutSetting->team_description = $request->team_description;
        $aboutSetting->update();

        toast('About Settings Updated Successfully!', 'success');
        return back();
    }
}
