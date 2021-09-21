@extends('master')
@section("content")

<div class="trending-wrapper"> 
    <div class="cart-list-header">
        <h2>CART TABLE</h2>
    </div>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $item)
                <tr>
                <th scope="row"><a href="detail/{{$item->id}}">{{$item->id}}</a></th>
                <td><a href="detail/{{$item->id}}"><img class="trending-image-table" src="{{$item->gallary}}"></a></td>
                <td><a href="detail/{{$item->id}}"><div class="">{{$item->name}}</div></a>
                <td><a href="detail/{{$item->id}}"><div class="">{{$item->price}}</div></a>
                <td><a href="detail/{{$item->id}}"><div class="">{{$item->category}}</div></a>
                <td><a href="detail/{{$item->id}}"><div class="">{{$item->description}}</div></a></td>
                <td><a href="/removecart/{{$item->cart_id}}"><button class="btn btn-danger">Remove to cart</button></a></td>
                </tr>
        @endforeach
    </tbody>
    </table>
    <div class="shopping">
        <a href="ordernow"><button class="btn btn-success">Buy Now</button></a>
    </div>
</div>
@endsection