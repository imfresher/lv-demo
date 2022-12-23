<?php

namespace App\Http\Controllers\Backend;

class HomeController extends BackendController
{
    public function index()
    {
        return view('backend.home.index');
    }

    public function editor()
    {
        return view('backend.home.editor');
    }

    public function gutenberg()
    {
        return view('backend.home.gutenberg');
    }
}
