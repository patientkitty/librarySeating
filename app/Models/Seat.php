<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    public function seatSearch($seatCode)
    {

        $searchResult = Seat::where('seat_code', $seatCode)->first();
        if(empty($searchResult)){
            echo "Seat Code does not exist!";
        }
        //return view('articles.lists')->with('title',$title);
        else
        {
            $seatCode = $searchResult['seat_code'];
            $seatDesc = $searchResult['seat_desc'];
            $createdWhen = $searchResult['created_at'];
            $createdBy = $searchResult['created_by'];
            //$holderName = $searchResult['holderName'];
            //$holdUntil = $searchResult['holdUntil'];
            $qrcode = $searchResult['qrcode'];
            //echo $seatDesc;

            return view('searchResult',[
                'seatCode'=>$seatCode,
                'seatDesc'=>$seatDesc,
                'createdWhen'=>$createdWhen,
                'createdBy'=>$createdBy,
                //'holderName'=>$holderName,
                //'holdUntil'=>$holdUntil,
                'qrcode'=>$qrcode
            ]);
        }
        //$searchResult;


    }



}
