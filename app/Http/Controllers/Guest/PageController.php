<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index(){
        $trains = Train::All();
        return view('pages.home', compact('trains'));
    }

    public function filter(Request $request){

        $filteredTrains = Train::where('departure_date', Carbon::today())->get();

        return view('pages.filtered-trains', compact('filteredTrains'));
    }

}
