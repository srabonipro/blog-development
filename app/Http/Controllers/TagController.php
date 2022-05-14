<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('backend.tag.index');
    }

    public function create()
    {
        return view('backend.tag.create');
    }

    public function edit()
    {
        return view('backend.tag.edit');
    }
}
