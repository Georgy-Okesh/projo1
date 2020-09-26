@extends('layouts.app')

@section('content')
      <div class="col-lg-3">

        <h1 class="my-4">Savva Car Hiring System</h1>
        <div class="list-group">
          @foreach ($cats as $cat)
          <a href="/category/{{$cat->id}}" class="list-group-item">{{$cat->name}}</a>
          @endforeach
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://www.lexus.com/-/media/TMNA.LEXC/Project/Lexus/Homepage/Content/MY2021/Lexus-LCC-homepage-content-tile_LEX-LCC-MY21-0093-01_750x460_M75.jpg?rev=6316ac11aa6b478cbdee1e77f7aafb43/900x350" alt="First slide" >
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.toyota.com/content/tcom1/custom-panels/heritage/978x500/LND_MY20_0011_V001.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://cdn.dealeron.com/assets/shared/CustomHTMLFiles/Responsive/MRP/Mercedes-Benz/2020/A-Class/images/2020-Mercedes-Benz-A-Class-08.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          @foreach ($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="/product/{{$product->id}}"><img class="card-img-top"  src="https://cdn.motor1.com/images/mgl/eLqQM/s1/2019-range-rover-sentinel.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/product/{{$product->id}}">{{$product->name}}</a>
                </h4>
                <h5>Ksh{{number_format($product->price,2)}}/hr</h5>
                <p class="card-text">{{$product->make}}</p>
                <a href="/product/{{$product->id}}" class="btn btn-xs btn-info pull-left">View</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</div>
        <!-- /.row -->


@endsection
