@extends('frontend.layout.header')
@section('css')
<link rel="stylesheet" href="{{asset("frontend/css/bloothHeadPhone.css")}}">
@endsection
@section('content')


        <div class="col-md-10">
            <div class="head">

                <p class="h2"> {{$cat->name}} </p>


            </div>


            <div class="content">
                    @foreach ($products as $product)
                    @foreach ($product->image as $img)

                    <div class="card">
                        <img src="{{asset("Accessories/products/".$img->filename)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{$product->name}}</h5>
                            <p class="card-text"> {{$product->total_price}} <br> <span> {{$product->price}}</span>
                               <a href="#"> <i type="button" id="icon_7" class="HeartAnimation"></i></a>
                            </p>
                            <button class="btn "><a href="{{route('addcart',$product->id)}}"style="text-decoration:none;color:white">اضف الى السلة</a></button>
                        </div>
                    </div>
                    @endforeach
                    @endforeach

                </div>








        </div>
    </div>
</div>
@endsection
