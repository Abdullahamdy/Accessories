@extends('frontend.authClient.layout.header')
@section('content')
    <!--End Navbar-->

    <!--Start LogIn-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 Login">
                <form action="/clientLogin" method="post">
                    @csrf

                    <div class="mb-3">
                        <input type="email"name="email" placeholder="البريد الالكتروني" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name ="password"placeholder="الرقم السري" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="formCheck">
                        <label class="form-check-label" for="exampleCheck1">تذكرنى</label>
                    </div>
                    <button type="submit" class="btn">تسجيل الدخول </button>
                </form>
                <p class="h6">ليس لديك حساب؟ <span><a href="{{route('client-register')}}">انشاء حساب</a></span></p>
            </div>
            <div class="col-md-6">
                <img src="{{asset("frontend/img/undraw_Wall_post_re_y78d.png")}}" alt="">
            </div>
        </div>
    </div>
    <!--End LogIn -->

    <!--Start Footer-->
   @endsection
