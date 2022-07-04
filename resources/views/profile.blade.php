<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROFILE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
     crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
     crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
     crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/')}}/css/profile.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="btn-group">
          <button class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            HELLO , {{ session('fname'); }}  {{ session('lname'); }}</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/')}}/profile">DASHBOARD</a>
            <a class="dropdown-item" href="{{url('/')}}/cart">CART</a>
            {{-- <a class="dropdown-item" href="{{url('/')}}/myorders">MY ORDERS</a> --}}
            {{-- <a class="dropdown-item" href="#"></a> --}}
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('/')}}/logout">LOGOUT</a>
          </div>
        </div>
        {{-- <a class="nav-link" href="{{url('/')}}/additem">ADD ITEM</a> --}}
        <ul class="navbar-nav">
          <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}/cart" style="font-size:22px"><i></i>CART
          <span class="badge badge-danger" style="font-size:20px">{{$addtocart->sum('quantity')}}</span></a>
        </li>
        </ul>
        <form class="form-inline" method="get" action="{{url('/')}}/productsearch">
          <div class="btn-group">
            <button class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              FILTER</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{url('/')}}/price-lowtohigh">PRICE : LOW TO HIGH</a>
              <a class="dropdown-item" href="{{url('/')}}/price-hightolow">PRICE : HIGH TO LOW</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/')}}/profile">CANCLE ALL FILTER</a>
            </div>
          </div>&nbsp;&nbsp;
          <input class="form-control mr-sm-2" type="text" placeholder="Search" id="search" aria-label="Search" name="search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
      @foreach($shop1->chunk(4) as $shopchunck)
      <div class="row">
        @foreach ($shopchunck as $shopitem) 
        <div class="col-sm-6 col-md-3">
          <br>
          <form method="post" action="{{url('/')}}/profile">
            @csrf
          <div class="thumbnail" align="center"><br>
            <img src="{{ asset('/storage').'/'.$shopitem->imgurl}}" alt="..." class="image-responsive">
            <div class="caption">
              <h5>{{ $shopitem->pname }}</h5>
              <div class="pull-left price">₹{{ $shopitem->price }}</div>
              <div class="clearfix">
                {{-- <p class="description">{{ $shopitem->details }}</p> --}}
                    <input type="hidden" id="custId" name="hidden" value="{{$shopitem->id}}">
                    <p><button type="submit" class="btn btn-success pull-right">DETAILS</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{url('/')}}/cart/{{$shopitem->id}}"><button type="button" class="btn btn-primary pull-right">ADD TO CART</button></a></p>
                  </div>
            </div>
          </div></form>
        </div>
        @endforeach
      </div>
      @endforeach
</body>
</html>