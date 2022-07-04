<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CART</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/')}}/css/cart.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
</head>
<body>
   <nav class="navbar navbar-dark bg-primary">
       {{-- <a class="navbar-brand" style="font-size:20px">HELLO , {{ session('fname'); }}  {{ session('lname'); }}</a> --}}
       <div class="btn-group">
         <button class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           HELLO , {{ session('fname'); }}  {{ session('lname'); }}</button>
         <div class="dropdown-menu">
           <a class="dropdown-item" href="{{url('/')}}/profile">DASHBOARD</a>
           <a class="dropdown-item" href="{{url('/')}}/cart">CART</a>
           {{-- <a class="dropdown-item" href="#"></a> --}}
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="{{url('/')}}/logout">LOGOUT</a>
         </div>
       </div>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav><br>
      <div align="center"><a href="{{url('/')}}/removeallitem"><button class="btn btn-danger margin-right">EMPTY CART</button></a></div><br>
      <table id="table1">
          <tr>
              <th>IMAGE</th>
              <th>PRODUCT NAME</th>
              <th>PRICE</th>
              <th>QUANTITY</th>
              <th>TOTAL PRICE</th>
          </tr>
          <label hidden="hidden">{{$total =0;}}</label>
      @foreach($cart as $shopchunck)
            <tr>
              <td><img src="{{ asset('/storage').'/'.$shopchunck->imgurl}}" alt="..." class="image-responsive"></td>
              <td>{{$shopchunck->pname}}</td>
              <td>{{$shopchunck->price}}</td>
              <td>{{$shopchunck->quantity}}</td>
              <td>{{$shopchunck->price * $shopchunck->quantity}}</td>
              <td><a href="{{url('/')}}/additembyone/{{$shopchunck->id}}"><button class="btn btn-outline-success margin-right">ADD</button></a></td>
              <td><a href="{{url('/')}}/reducecartitem/{{$shopchunck->id}}"><button class="btn btn-outline-danger margin-right">REDUCE BY ONE</button></a></td>
              <td><a href="{{url('/')}}/removecartitem/{{$shopchunck->id}}"><button class="btn btn-outline-danger margin-right">REMOVE</button></a></td>
            </tr>
            <label hidden="hidden">{{$total += $shopchunck->price * $shopchunck->quantity;}}</label>
      @endforeach
      <tr style="font-weight: bolder"><td colspan="3">TOTAL PRICE : </td><td>{{$cart->sum('quantity');}}</td>
        <form method="post" action="{{url('/')}}/cart">@csrf
            <td>
                {{$total}} <input type="textbox" hidden="hidden" name="totalhidden" value="{{$total}}"></td>
            {{-- <form action="{{url('/')}}/cartpayment" method="POST"> --}}
            <td colspan="3">
                {{-- <a href="{{url('/')}}/cartpayment"> --}}
                    @if($total!=0)
                    <button class="btn btn-success margin-right" type="submit">PURCHASE CART</button>
                    @endif
                {{-- </a> --}}
            </td>
        </form>
        </tr>
        </table>
    {{-- <br><br>
    <a href="{{url('/')}}/logout"><button class="btn btn-outline-danger margin-right">Logout</button></a> --}}
</body>
</html>