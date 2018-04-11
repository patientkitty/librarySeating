<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Log;

class seatAdminController extends Controller
{
    //
    function seatSearch(Request $request)
    {

        $seatCode = $request->input('seatCode','');
        if ($seatCode == ''){

            return 'Please type in Seat Code';
        }
        $allSeat = new Seat();
        return $allSeat->seatSearch($seatCode);
    }
}
