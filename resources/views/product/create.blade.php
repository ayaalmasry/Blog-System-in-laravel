@extends('product.layout')

@section('content')

<div class="container">
    <form action="{{ route('products.store')}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control"  placeholder="product name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">price</label>
      <input type="text" name="price" class="form-control"  placeholder="product price">
     
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">details</label>
    <textarea class="form-control" name="details" rows="3"></textarea>
  </div>
        <button type="submit" class="btn btn-primary">Primary</button>
  
</form>
</div>



@endsection 