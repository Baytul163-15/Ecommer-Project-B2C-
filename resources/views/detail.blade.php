@extends('master')
@section("content")

<div class="container details-product">
    <div class="row">
        <div class="col-md-6">
            <img class="detail-img" src="{{$product->gallary}}" alt=""/>
        </div>
        <div class="col-md-6">
                <a href="/">Go back</a>
            <h2>{{$product->name}}</h2>
            <h3>TK. {{$product->price}}</h3>
            <p><span style="font-weight: bold;">Product Details:</span> {{$product->description}}</p>
            <h4>Category: {{$product->category}}</h4>
            <br>
            <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>


@endsection