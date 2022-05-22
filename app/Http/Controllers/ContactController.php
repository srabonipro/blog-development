<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:4294967295',
        ]);

        Contact::create($validated);

        toast('Your Message Sent Successfully!', 'success')->position('bottom-end')->background('green');
        return back();
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        toast('Contact Deleted Successfully!', 'success');
        return back();
    }
}
