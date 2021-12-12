@extends('frontend.authClient.layout.header')
@section('content')

@section('css')
<link rel="stylesheet" href="{{asset("frontend/css/creatAcount.css")}}">

@endsection
<div class="container">
    <div class="row">
        <div class="col-md-6 creatAcount">
            <p class="h2"> انشاء حساب</p>
            <form action="create-account"method="post">
                @csrf
                <div class="name">
                    <input type="text" placeholder="الاسم الاول" name="first_name">
                    <input type="text" placeholder="الاسم الثانى" name="last_name">
                </div>
                <div class="email">
                    <input type="email" placeholder="البريد الالكتروني"name="email">
                </div>

                <div class="password">
                    <input type="password" placeholder="الرقم السرى"name="password">
                </div>
                <br>
                <div class="choose">
                <select name="trader_id">
                    @foreach ($trader_type as $item)
                    <option value="{{$item->id}}">{{$item->type}}</option>
                    @endforeach

                </select>
            </div>
            <br>


                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> أوافق علي الاحكام و الشروط و سياسة الخصوصية</label>

                <div class="submit">
                    <button type="submit" class="btn ">انشاء حساب</button>
                    <p class="h6">ليس لديك حساب؟ <span><a href="{{route('clientlogin')}}">تسجيل الدخول</a></span></p>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <img src="{{asset("frontend/img/undraw_Wall_post_re_y78d.png")}}" alt="">
        </div>
    </div>
</div>

@endsection
