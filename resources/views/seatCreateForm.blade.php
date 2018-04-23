@extends('master')

@section('title', '创建座位')
@section('content')

<img src="{{asset('images/library.jpg')}}" width ="100%"/>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="weui-cells">
    <div class="weui-cell">
		<form action="seatCreating" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
         
            <div>
                <label for="">Seat Code</label>
                <input type-"text" name="seatCode"/>
            </div>
            <div>
                <label for="">Seat Description</label>
                <input type-"text" name="seatDesc"/>
            </div>
            <div>
                 <button class="weui-btn weui-btn_mini weui-btn_primary" type="submit">创建</button>
            </div>
        </form>
    </div>
</div>



<div class="button-sp-area">

	<a href="/seatAdmin" class="weui-btn weui-btn_plain-primary">返回首页</a>
    
</div>
@section('my-js')

@endsection