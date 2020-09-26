@extends('layouts.app')

@section('content')
      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="" class="list-group-item">{{$cat->name}}</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        @foreach ($products as $product)
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">{{$product->name}}</h3>
            <h4>Ksh{{number_format($product->price,2)}}/hr</h4>
            <p class="card-text">{{$product->description}}</p>
            <button type="button"  class="btn btn-outline-info"  onclick="location.href='{{ url('booking') }}'">book</button>
        </div>
        @endforeach
        route('test', ['id' => $id]);
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->
      
@endsection