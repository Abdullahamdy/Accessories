@extends('frontend.authClient.layout.header')
@section('content')
@section('css')
<link rel="stylesheet" href="{{asset("frontend/css/showTalap.css")}}">
<link rel="stylesheet" href="{{asset("frontend/css/animate.css")}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar">
                @foreach ($categories as $category)
                <a href="{{route('product',$category->id)}}">{{$category->name}}</a>

                @endforeach


            </div>
        </div>
        <div class="col-md-10">
            <div class="search">
                <input class="form-control me-2 search-input" type="search" placeholder="ابحث" aria-label="Search">
            </div>

            <div class="col-md-10 ">

                <div name="q" class="list-group list-group-flush search-result">

                    <a href="" class="form-group-item"></a>


                </div>
            </div>



            @foreach($products as $product)
            @foreach($product->image as $image)


            <div class="img">

                <img src="{{asset("Accessories/products/".$image->filename)}}" alt="">
                <div class="description">
                    <p class="h2"> {{$product->name}}</p>
                    <p class="h6">{{$product->company_name}}</p>
                    <p class="h2">{{$product->total_price}}</p>
                    <p class="h6 oldPrice">{{$product->price}} </p>


                </div>
            </div>
            @endforeach
            @endforeach
            <div class="littelImg">
                <img src="{{("frontend/img/png-clipart-iphone-x-apple-iphone-8-plus-apple-iphone-7-plus-mobile-phone-accessories-iphone-5s-apple-gadget-mobile-phone-case.png")}}" alt="">
                <img src="{{("frontend/img/png-clipart-iphone-x-apple-iphone-8-plus-apple-iphone-7-plus-mobile-phone-accessories-iphone-5s-apple-gadget-mobile-phone-case.png")}}" alt="">
                <img src="{{("frontend/img/png-clipart-iphone-x-apple-iphone-8-plus-apple-iphone-7-plus-mobile-phone-accessories-iphone-5s-apple-gadget-mobile-phone-case.png")}}" alt="">
                <img src="{{("frontend/img/png-clipart-iphone-x-apple-iphone-8-plus-apple-iphone-7-plus-mobile-phone-accessories-iphone-5s-apple-gadget-mobile-phone-case.png")}}" alt="">
                <button class="btn "><a href="{{route('addcart',$product->id)}}"style="text-decoration:none;color:white">اضف الى السلة</a></button>
            </div>
            <div class="alldescribtion">
                <p class="h2">المواصفات</p>
                <p class="h5">
                    {{$product->description}}
                </p>
            </div>
            <p class="h2">اراء العملاء</p>
        </div>
        <div class="col-md-2 rightRate">
            <div class="rate">
                <p class="h4">4.5/5</p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <p class="h4">200 تقييم</p>
            </div>
        </div>
        <div class="col-md-10 leftRate">
            <div class="rateContainer">
                <div class="peopleWord">
                    <p class="h4">جيد 21/10/2020</p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p class="h6">
                        هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
                    </p>
                    <p class="h4">ساره احمد</p>
                </div>
            </div>
            <div class="rateContainer">
                <div class="peopleWord">
                    <p class="h4">جيد 21/10/2020 </p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p class="h6">
                        هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
                    </p>
                    <p class="h4">ساره احمد</p>
                </div>
            </div>
            <div class="rateContainer">
                <div class="peopleWord">
                    <p class="h4">جيد 21/10/2020 </p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <p class="h6">
                        هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة
                    </p>
                    <p class="h4">ساره احمد</p>
                </div>
            </div>
            <div class="text">
                <form >
                    <fieldset>
                        <span class="star-cb-group">
                            <input class="clickrating"   type="radio" id="rating-5" name="rating" value="5" /><label
                                for="rating-5">5</label>
                            <input id="InputProd" name="rating" value="{{$product->id}}" />
                            <input id="InputUser" name="rating" value="{{auth()->user()->id}}" />
                               
                            <input class="clickrating"  type="radio" id="rating-4" name="rating" value="4"checked="checked" /><label for="rating-4">4</label>
                            <input class="clickrating"  type="radio" id="rating-3" name="rating" value="3" /><label
                                for="rating-3">3</label>
                            <input type="radio" id="rating-2" name="rating" value="2" /><label
                                for="rating-2">2</label>
                            <input class="clickrating"  type="radio" id="rating-1" name="rating" value="1" /><label
                                for="rating-1">1</label>
                            <input type="radio" id="rating-0" name="rating" value="0"
                                class="clickrating star-cb-clear" /><label for="rating-0">0</label>
                        </span>
                       
                    </fieldset>
                    <textarea value="new Mesage" name="YourRate" id="InputMessage" cols="30" rows="1">رسالتك</textarea>

                </form>
               
                <br>
                <button class="btn-subm">ارسال</button>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
 $(document).ready(function(){
     $('.search-input').on('keyup',function(){
         var _q = $(this).val()
         if(_q.length>=3){
             $.ajax({
                 url:"{{url('productsearch')}}",
                 data:{
                     q:_q,
                 },

                 dataType:'json',
                 beforeSend:function(){
                     $(".search-result").html("<a href= '' class='list-group-item'>loading...</a>")

                 },
             success:function(res){
                var _html = '';
                $.each(res.data,function(index,data){





                    _html +=  '<a class= "list-group-item"href="http://127.0.0.1:8000/product-details/'+data.id +'">'+data.name+'</a>';

                });

                $(".search-result").html(_html);

             },

             });
         }
     })

 })

</script>

<script type="text/javascript">

    $('.btn-subm').on('click',function(e){
        e.preventDefault();
         let rating = $('.clickrating').val(); 
         console.log(rating);  
         let prod = $('#InputProd').val();
         let user = $('#InputUser').val();
         let message = $('#InputMessage').val();
      
        
        $.ajax({
          url: "/submit-form",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            rating:rating,
            prod:prod,
            user:user,
            message:message,
          },
          success:function(response){
            
            console.log('response');
          },
          error: function(response) {
            console.log('error');
          },
          });
}); 
        
      </script>
@endsection
