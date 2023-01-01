@extends('product.layout')

@section('content')

<div class="jumbotron">
 
  <p>Itrash productes</p>
  <a class="btn btn-primary btn-lg" href="{{route('products.indexs')}}" role="button">home</a>
</div>
<div class="container">
    @if($message = Session::get('success'))
    <div class="alert alert-primary role="alert>
        {{$message}}
</div>
    @endif
    
<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product name</th>
      <th scope="col">product price</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      @php
      
      $i=0;
      @endphp
      @foreach($product as $item)
      <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
        <td>
            <div class="row">
                <div class="col-sm">
                    <a class="btn btn-success" href="{{ route('products.edit',$item->id)}}">Edit</a>
                </div>
                <div class="col-sm">
                    <a  class="btn btn-primary" href="{{ route('products.show',$item->id)}}">show</a>
                </div>
                <div class="col-sm">
                    <a  class="btn btn-primary" href="{{ route('soft.delete',$item->id)}}">soft delete</a>
                </div>
                <div class="col-sm">
                    <form action="{{ route('products.destroy',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
                </div>
            </div>
            
            
            
          </td>
                
          
    </tr>
    
      @endforeach
    
  </tbody>
</table>
    {!!$product->links() !!}

</div>

@endsection