@extends('master')
@section("content")

<div class="custom-product">

  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div>

  <div class="col-sm-4">
  <div class="trending-wrapper">
        <h5>Result For products</h5>
        @foreach ($products as $item)
        <div class="searched-item">
            <a href="detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallary}}">
            <div class="">
                <h2>{{$item->name}}</h2>
                <p><span style="font-weight: bold;">Product Details:</span> {{$item->description}}</p>
            </div>
            </a>
        </div>
        @endforeach
    </div>
  </div>
    
</div>
@endsection