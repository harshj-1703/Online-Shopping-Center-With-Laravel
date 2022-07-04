<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCT</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/')}}/css/product.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
   <link rel="stylesheet" href="{{url('/')}}/css/profile.css">
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
      </nav>
      <div class="row">
        <div class="col-sm-6 col-md-12">
          <br>
          <form method="post" action="{{url('/')}}/payment">
            @csrf
          <div class="thumbnail" align="center"><br>
            <img src="{{ asset('/storage').'/'.$shopinfo->imgurl}}" alt="..." class="image-responsive">
            <div class="caption"><br>
              <h3>{{ $shopinfo->pname }}</h3><br>
              <div class="pull-left price" style="font-size: 36px;">₹{{ $shopinfo->price }}</div><br>
              <div class="clearfix">
                    <p class="description" style="width: 800px;">{{ $shopinfo->details }}</p>
                    <input type="hidden" id="custId" name="hidden" value="{{$shopinfo->id}}">
                    {{-- <p><button type="submit" class="btn btn-success pull-right" >BUY</button></p> --}}
                    <p><a href="{{url('/')}}/cart/{{$shopinfo->id}}"><button type="button" class="btn btn-success pull-right">ADD TO CART</button></a></p>
                  </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    {{-- <br><br>
    <a href="{{url('/')}}/logout"><button class="btn btn-outline-danger margin-right">Logout</button></a> --}}
</body>
</html>