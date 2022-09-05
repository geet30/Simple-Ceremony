<?php

namespace App\Http\Controllers\Celebrants;
use App\Http\Controllers\Controller;
use App\Models\{Locations,User};
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Auth; 

class DashboardController extends Controller
{
    public function upcomingMarriages(Request $request){
        return view('celebrant.upcoming.listing');

    }

    
}