@extends('product.layout')

@section('content')

<div class="container">
    <form action="{{ route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" value="{{$product->name}}"  class="form-control"  placeholder="product name" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">price</label>
      <input type="text" name="price"  value="{{$product->price}}" class="form-control"  placeholder="product price">
     
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">details</label>
    <textarea class="form-control" name="details" rows="3"> {!! $product->details !!}</textarea>
          
  </div>
        <button type="submit" class="btn btn-primary">update</button>
        <a href="{{route('products.index')}}">back</a>
  
</form>
</div>



@endsection 