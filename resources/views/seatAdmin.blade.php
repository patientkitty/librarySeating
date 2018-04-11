<!doctype html>

@extends('master')
@section('title', '座位管理员')
@section('content')
<img src="{{asset('images/library.jpg')}}" width ="100%"/>
<div>
    <h2 align = "center">Library Seating System</h2>
</div>
<div class="weui-cells">
    <div class="weui-cell">
        <div class="weui-cell__bd">
                <form action="seatSearch" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div>
                        <label for="">Seat Code</label>
                        <input type-"text" name="seatCode"/>
                        <button class="weui-btn weui-btn_mini weui-btn_primary" type="submit">查询</button>
                    </div>
                </form>
        </div>
    </div>
    <div class="weui-cell">
        <div class="weui-cell__bd">
            <a href="/seatCreateForm" class="weui-btn weui-btn_mini weui-btn_primary">创建新座位</a>
        </div>
    </div>


</div>
               
                

    

@endsection
