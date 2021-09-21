@extends('master')
@section("content")
<div class="container-fluid">
    <div class="cart-list-header">
        <h2>ORDER LIST</h2>
    </div>
</div>
<div class="container">
    <div class="col-sm-10">
        <table class="table">
        <thead>
            <tr>
            <th scope="col-sm-8">First</th>
            <th scope="col-sm-4">Last</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Amount</td>
            <td>TK. {{$total}}</td>
            </tr>
            <tr>
            <td>Tax</td>
            <td>TK. {{10}}</td>
            </tr>
            <tr>
            <td>Delivery</td>
            <td>TK. 00</td>
            </tr>
            <tr>
            <td>Total Amount</td>
            <td>TK. {{$total+10}}</td>
            </tr>
        </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
            @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment"/> <span>Online Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"/> <span>EMI Payment</span><br><br>
                    <input type="radio" value="cash" name="payment"/> <span>Payment On Delivery</span><br><br>
                </div>
                <button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection