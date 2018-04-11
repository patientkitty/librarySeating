<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;

class testController extends Controller
{
    //
    public function test()
    {
        $seat = Seat::where('seat_code','test001')->get();
        dd($seat);
    }
}
