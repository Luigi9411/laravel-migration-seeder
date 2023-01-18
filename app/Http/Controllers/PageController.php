<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $listings = Listing::all();
        return view('guest.home',['listings' => $listings,
    ]);
    }
}
