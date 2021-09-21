@extends('master')
@section("content")
<!-- Slider Create -->
<div class="custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      @foreach ($products as $item)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$item->id}}" class="@if($loop->first) active @endif"></li>
      @endforeach
      </ol>

      <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="carousel-item @if($loop->first) active @endif ">
          <a href="detail/{{$item->id}}">
            <img class="d-block w-100 slider-img" src="{{$item->gallary}}">
            <div class="carousel-caption slider-text">
              <h3>{{$item->name}}</h3>
              <p>{{$item->description}}</p>
            </div>
          </a>
        </div>
        @endforeach
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
</div>
<!-- Trending site -->
<div class="container">
  <div class="trending-wrapper">
      <div class="trending-fond">
        <h3><span class="trending-main">Trending Products</span></h3>
      </div>
      @foreach ($products as $item)
      <div class="trending-item item-trending">
        <div class="item-trending-child">
          <a class="" href="detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallary}}">
            <div class="">
              <h3>{{$item->name}}</h3>
            </div>
          </a>
        </div>
      </div>
      @endforeach
  </div>
</div>
@endsection