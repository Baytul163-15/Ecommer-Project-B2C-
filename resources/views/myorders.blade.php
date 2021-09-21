@extends('master')
@section("content")

<div class="trending-wrapper"> 
    <div class="cart-list-header">
        <h2>MY ORDER TABLE</h2>
    </div>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th width="10%" scope="col">ID</th>
        <th width="10%" scope="col">Image</th>
        <th width="10%" scope="col">Name</th>
        <th width="10%" scope="col">Price</th>
        <th width="10%" scope="col">Delivery Satus</th>
        <th width="25%" scope="col">Address</th>
        <th width="10%" scope="col">Payment_Status</th>
        <th width="10%" scope="col">Payment_Method</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $item)
                <tr>
                    <th scope="row"><a href="detail/{{$item->id}}">{{$item->id}}</a></th>
                    <td><a href="detail/{{$item->id}}"><img class="trending-image-table" src="{{$item->gallary}}"></a></td>
                    <td><a href="detail/{{$item->id}}"><div class="">{{$item->name}}</div></a></td>
                    <td><a href="detail/{{$item->id}}"><div class="">{{$item->price}}</div></a></td>
                    <td><a href="detail/{{$item->id}}"><div class="">{{$item->status}}</div></a></td>
                    <td><a href="detail/{{$item->id}}"><div class="">{{$item->address}}</div></a></td>
                    <td><a href="detail/{{$item->id}}"><div class="">{{$item->payment_status}}</div></a></td>
                    <td><a href="detail/{{$item->id}}"><div class="">{{$item->payment_method}}</div></a></td>
                </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection