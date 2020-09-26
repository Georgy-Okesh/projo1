@extends('layouts.app')

@section('content')
      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          @foreach ($cats as $cat)
          <a href="/category/{{$cat->id}}" class="list-group-item">{{$cat->name}}</a>
          @endforeach
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="{{$product->image}}" alt="">
          <div class="card-body">
            <h3 class="card-title">{{$product->name}}</h3>
            <h4>Ksh{{number_format($product->price,2)}}/hr</h4>
            <p class="card-text">{{$product->description}}</p>
            <button type="button"  class="btn btn-outline-info"  onclick="location.href='{{ url('booking') }}'">book</button>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->
      
@endsection