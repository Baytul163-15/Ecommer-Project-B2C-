<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))
  {
    $total = ProductController::cartItem();
  }
  
?>

<nav class="navbar navbar-expand-lg navbar-light bglight">
  <a class="navbar-brand" href="/">BigBazer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-color" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">Order</a>
      </li>
    </ul>
    <span class="navbar-text">
      <a style="margin-right: 30px; color: white;" href="/cartlist">Cart({{$total}})</a>
    </span>
    <span class="navbar-text">
      @if(Session::has('user'))
      <li class="nav-item dropdown" style="margin-right: 30px; color: white;">
          <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
        @else
          <a class="log-option" href="/login">Login</a>
          <a class="log-option" href="/register">Registration</a>
        @endif
    </span>
    <span class="navbar-text">
      <form action="/search" class="d-flex">
        <input class="form-control mr-2 search-box" type="text" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" style="color: white;" type="submit">Search</button>
      </form>
    </span>
  </div>
</nav>