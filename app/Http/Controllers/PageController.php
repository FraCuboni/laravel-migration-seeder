<?php

namespace App\Http\Controllers;

use App\Models\Train;
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
        return view('page');
    }
}
