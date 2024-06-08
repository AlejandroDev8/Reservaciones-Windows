<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function index()
    {
        return view('help.index');
    }

    public function users()
    {
        return view('help.users');
    }

    public function admin()
    {
        return view('help.admin');
    }
}
