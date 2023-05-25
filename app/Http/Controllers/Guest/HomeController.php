<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::where('data_di_partenza', '=', Carbon::today())->get();
        return view('home', compact('trains'));
    }
}
