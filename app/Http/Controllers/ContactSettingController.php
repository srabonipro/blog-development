<?php

namespace App\Http\Controllers;

use App\Models\ContactSetting;
use Illuminate\Http\Request;

class ContactSettingController extends Controller
{
    public function contactSettingIndex()
    {
        $contact = ContactSetting::get()->first();
        return view('backend.setting.contact', compact('contact'));
    }

    public function contactSettingUpdate(Request $request, ContactSetting $contactSetting)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:65535',
            'description' => 'required|string|max:65535',
        ]);
        if ($request->image) {
            // Remove old image
            if (file_exists(public_path($request->old_image))) {
                unlink(public_path($request->old_image));
            }

            // Save new image
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/contact-setting/', $image_new_name);
            $contactSetting->image = '/storage/contact-setting/' . $image_new_name;
            $contactSetting->save();
        }

        $contactSetting->email = $request->email;
        $contactSetting->phone = $request->phone;
        $contactSetting->address = $request->address;
        $contactSetting->description = $request->description;
        $contactSetting->update();

        toast('Contact Settings Updated Successfully!', 'success');
        return back();
    }
}
