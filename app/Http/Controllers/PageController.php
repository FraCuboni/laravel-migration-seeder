<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\Package;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('home', [
            'trains' => $trains,
        ]);
    }

    public function page()
    {
        $packages = Package::all();

        return view('page', [
            'packages' => $packages,
        ]);
    }
}
