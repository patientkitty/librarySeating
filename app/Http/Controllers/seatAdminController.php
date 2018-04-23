<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seat;
use App\Models\Log;
use Validator;
class seatAdminController extends Controller
{
    //
    function post_seatSearch(Request $request)
    {

        $this->validate($request, [
            'seatCode' => 'required|exists:mysql.seats,seat_code',
        ]);
        $seatCode = $request->input('seatCode','');
        if ($seatCode == ''){

            return redirect()->back()->withInput()->withErrors('请填写需要查询的Seat Code！');

        }
        $allSeat = new Seat();
        $searchResult = Seat::where('seat_code', $seatCode)->first();
        if(empty($searchResult)){
            return redirect()->back()->withInput()->withErrors('Seat Code does not exist!！');
            //echo "Seat Code does not exist!";
        }
        else
        {
            return view('searchResult',['searchResult'=>$searchResult]);
        }
    }

    function search($seatCode)
    {

        /*$this->validate($request, [
            'seatCode' => 'required|exists:mysql.seats,seat_code',
        ]);*/
        //$seatCode = $request->get('seatCode','');

        $searchResult = Seat::where('seat_code', $seatCode)->first();
//        if (!$searchResult)
//        {
//            return response('no such seat code', 402);
//        }

        return response()->json($searchResult);

    }

    function get_seatSearch(Request $request)
    {


        $seatCode = $request->get('seatCode');
        $searchResult = Seat::where('seat_code', $seatCode)->first();
        if(empty($searchResult)){
           // return redirect()->back()->withInput()->withErrors('Seat Code does not exist!！');
            //echo "Seat Code does not exist!";
        }
        else
        {
            return view('searchResult',['searchResult'=>$searchResult]);
        }
        return view('searchResult');

    }


    function seatCreateForm()
    {
        return view('seatCreateForm');
    }

    function seatCreating(Request $request)
    {
        $this->validate($request, [
            'seatCode' => 'required',
        ]);

        $seatCode = $request->input('seatCode');
        $seatDesc = $request->input('seatDesc');
        if ($seatCode == ''){
            return redirect()->back()->withInput()->withErrors('Please input Seat Code！');
        }
        else
        {
            $run = new Seat();
            $searchResult = Seat::where('seat_code', $seatCode)->first();
            if(empty($searchResult)){//座位号不存在，可以继续添加

                //生成二维码对应的URL
                $urlText = 'http://www.baidu.com/s?wd='.$seatCode;
                //配置二维码图片保存路径
                $imgPath = 'image/qrcodes/'.$seatCode.'.jpg';
                //利用PHP QR Code生成二维码图片并保存到指定目录
                //\PHPQRCode\QRcode::png($urlText, public_path($imgPath), 'L', 4, 2);

                //将用户输入的seatCode，seatDesc以及本地保存的二维码路径，存储进数据库
                $newSeatData = ['seat_code'=>$seatCode,
                    'seat_desc'=>$seatDesc,
                    'qrcode'  =>$imgPath,
                    'created_by' =>'Sam'
                ];
                $run->seat_code=$seatCode;
                $run->seat_desc=$seatDesc;
                $run->qrcode=$imgPath;
                $run->created_by='Sam';
                //$run->fill($newSeatData);
                $run->save();
                $message = "创建成功，请继续添加。";
                echo "<script type='text/javascript'>alert('$message');</script>";
                return view('seatCreateForm');

            }
            return $run->seatCreating($seatCode,$seatDesc);
        }

    }
}
