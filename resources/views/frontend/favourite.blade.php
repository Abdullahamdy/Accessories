@extends('frontend.authClient.layout.header')
@section('css')
<link rel="stylesheet" href="{{asset("frontend/css/favPage.css")}}">
@endsection
@section('content')
    <!--End Navbar-->



    <div class="container">
        <div class="row">
            <div class="col-md-12 firstContainer">
                @foreach($userFavourite as $favourite)
                @foreach($favourite->image as $img)

                <div class="card" style="width: 13rem;">
                    <img src="{{asset("Accessories/products/".$img->filename)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{$favourite->name}}</h5>
                        <p class="card-text">{{$favourite->total_price}} <br> <span> {{$favourite->price}}</span>
                            <a href="{{ url('far/'. $favourite->id) }}">

                                @if ($favourite->isFavorited())
                                <i class="fa fa-heart" style="font-size:36px;color:red"></i>
                                @else
                                <i class="fa fa-heart" style="font-size:36px;color:rgb(151, 147, 147)"></i>

                                @endif

                            </a>
                        </p>
                        <button class="btn ">اضف الى السلة</button>
                    </div>
                </div>

                @endforeach
                @endforeach


            </div>
        </div>
    </div>
    <!--Start Footer-->
    @endsection
    <!--End Footer-->

    <!-- Main Js Templet From BootStrap5-->





















