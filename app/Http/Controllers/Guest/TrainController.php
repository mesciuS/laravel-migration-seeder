<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where('departure_time', '>=', now()->format('Y-m-d'))->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
