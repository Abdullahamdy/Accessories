
@php
$category = $category->pluck('name','id')->toArray();
$trad = $trader->pluck('type','id')->toArray();
$images = $image->where('imagable_id',$model->id)->get();

@endphp

{!! \App\MyHelper\Field::text('name' , 'الاسم ' ) !!}
{!! \App\MyHelper\Field::select('trader_id' , 'نوع التجارة ',$trad ) !!}
{!! \App\MyHelper\Field::select('category_id' , 'التصنيف التابع  ',$category ) !!}
{!! \App\MyHelper\Field::text('company_name' , 'اسم الشركة ' ) !!}

{!! \App\MyHelper\Field::textarea('description' , 'الوصف' ) !!}



<div class="">
    <div class="row">
        <div class="col-md-4">

            <div class="form-group">
                <label>السعر    <label>
                <input type='text' value = "{{$model->price}}"class="form-control" name="price" id="price" onblur="getAmount()">

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label>الخصم    <label>
                <input type='text' class="form-control"value = "{{$model->discount}}" name="discount" id="discount" onblur="getAmount()">

            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label>السعر النهائي<label>
                <input type='text' value = "{{$model->total_price}}"class="form-control" readonly name="total_price" id="total_price" onblur="getAmount()">
            </div>
        </div>
    </div>
</div>




@if($model->id)

    <div class="row">
        <div class="col-md-4">

        @foreach($images as $img)
     <img src="{{asset('Accessories/products/'.$img->filename)}}" class="" alt="jfafahfa" style="width:100%">
     <button
     {{-- @dd($img->id) --}}

     id="{{$img->id}}"
     data-token="{{ csrf_token() }}"
     data-route="{{url('admin/edit-attachmentProduct/'.$img->id)}}"
     type="button"
     class="destroy btn btn-danger btn-xs">
 <i class="fa fa-trash-o"></i>
</button>
     <br>
     <br>
     <br>
@endforeach





    </div>
</div>

@endif





{!! \App\MyHelper\Field::fileWithPreview('image' , 'الصور' ,true) !!}






@push('scripts')



<script>

   function getAmount()
   {
         var   price = $('#price').val();
         var discount = $('#discount').val();
         $('#total_price').val(price-discount)
            }
</script>
@endpush

