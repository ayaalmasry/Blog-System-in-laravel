@extends('product.layout')

@section('content')

<div class="container">
    
        
  <div class="form-group">
    <label for="exampleFormControlInput1">{{$product->name}}</label>
    </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">{{$product->price}}</label>
       
  </div>
        <div class="form-group">
    
   {!! $product->details !!}
          
  </div>
        <a href="{{route('products.index')}}">back</a>
</div>



@endsection 