<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $packages = Package::where('price', '<', '10500')->with('packageItems')->get();
        return view('index', compact('packages'));
    }
    public function profile()
    {
        $packages = Package::get();
        $current_time = Carbon::now();
        $time_zones = timezone_identifiers_list();
        return view('profile', ['time_zones' => $time_zones])
            ->with('current_time', $current_time)
            ->with('packages', $packages);
    }
}
