@extends('frontend.authClient.layout.header')
@section('css')
<link rel="stylesheet" href="{{asset("frontend/css/basket.css")}}">
@endsection


@section('content')

<div class="container">
    <div class="row">
        <p class="h2"> سلة المنتجات</p>

          @foreach($carts as $cart)

@if ($cart->options->user_id == auth()->user()->id)
    



        <div class="col-md-10">
            <div class="img">
                <p class="h6"> {{$cart->name}}</p>
                <img src="{{asset('Accessories/products/'.$cart->options->img)}}" alt="">
            </div>
            <div class="details">
                
                <p class="h4">{{$cart->options->category}}</p>
                <p class="h6"> {{$cart->options->company}}</p>
            </div>
            {{-- <div class="number">
                <p class="h6" style="text-align:right">الكمية</p>
                <input class="quantity"type="number" value="{{$cart->qty}}" id="Number">
            </div> --}}

<div class="number">
    <select class="quantity" id="" data-id={{$cart->rowId}} >
        <option {{$cart->qty==1 ?'selected':''}}>1</option>
        <option {{$cart->qty==2 ?'selected':''}}>2</option>
        <option {{$cart->qty==3 ?'selected':''}}>3</option>
        <option {{$cart->qty==4 ?'selected':''}}>4</option>
        <option {{$cart->qty==5 ?'selected':''}}>5</option>
    </select>
</div>


            <div class="price">
                <p style="text-align:right" class="h6">سعر الوحده</p>
                <input class="h3 " name="price"id="price "value="{{$cart->price}}">
            </div>
            <div class="allPrice ">
                <p style="text-align:right" class="h6">السعرالكلي</p>
                <p class="h3 " id="allPrice ">{{$cart->qty*$cart->price}}
                </p>
                <a class="btn btn-success" href="{{route('delete-cart',$cart->rowId)}}"style="overflow:hidden;">حذف</a>
            </div>
        </div>
        @endif
        @endforeach


        <?php
        $totprice = array();
    
        foreach($carts as $cart){
            if($cart->options->user_id == auth()->user()->id){
        array_push($totprice,$cart->qty*$cart->price);
        
      }
    }
    $all = array_sum($totprice); 
   
    ?>

        <p class="h6 ">
            السعرالكلي <span>{{$all}}</span>
        </p>
        <a type="button " class="btn " href="pay.html">
            متابعه عمليه الشراء
        </a>
        
    </div>
</div>



@endsection

@section('script')
{{-- you should make npm run dev --}}
<script src="{{asset('js/app.js')}}"></script>
<script>
(function(){
    const classname = document.querySelectorAll('.quantity');
    Array.from(classname).forEach(function(element){
        element.addEventListener('change',function(){
            const id = element.getAttribute('data-id')
            axios.patch(`/cart/${id}`,{
                quantity:this.value,


            })
            .then(function(response){
               window.location.href = '{{route('show-cart')}}'
            })
            .catch(function(error){
                console.log(error)
            })
        })
    })

})();
</script>
@endsection
