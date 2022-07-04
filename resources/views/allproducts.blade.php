<html>
<head>   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="{{url('/')}}/js/adminhome.js"></script>
<link rel="stylesheet" href="{{url('/')}}/css/allorder.css">
<title>ALL USERS</title>
</head>

<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#">HELLO , {{session('adminname');}}</a>
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a href="{{url('/')}}/adminhome" class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>DASHBOARD</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/')}}/additem" class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>ADD PRODUCT</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/')}}/allorder" class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>ALL ORDERS</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/')}}/allusers" class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>ALL USERS</a>
            </li>
            <li class="nav-item active">
                <a href="{{url('/')}}/allproducts" class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>ALL PRODUCTS</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>CHARTS</a>
            </li> --}}
            <li class="nav-item">
                <a href="{{url('/')}}/logout" class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>LOGOUT</a>
            </li>
        </ul>
    </div>
</nav>

<div class="page">
    <div class="page__demo">
      <div class="main-container page__container">
        <table class="table">
          <thead class="table__thead">
            <tr class="table__head">
              <th class="table__th">IMAGE</th>
              <th class="table__th">PRODUCT NAME</th>
              <th class="table__th">DETAILS</th>
              <th class="table__th">PRICE</th>
              <th class="table__th">ADDED AT</th>
              <th class="table__th">ENABLE OR DISABLE</th>
            </tr>
          </thead>
          @foreach($shop as $shopchunck)
          <tbody class="table__tbody">
            <tr class="table__tr">
                <td class="table__td table__mobile-title"> <!-- table__mobile-title-->
                    <span class="table__value"><img src="{{ asset('/storage').'/'.$shopchunck->imgurl}}" alt="..."
                      style="height:80px;width:80px;" class="image-responsive"></span>
                  </td>
              <td class="table__td">
                <span class="table__value">{{$shopchunck->pname}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$shopchunck->details}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$shopchunck->price}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$shopchunck->created_at}}</span>
              </td>
              <td style="text-align: center;">
                  {{-- <a href="{{url('/')}}/allproducts/check/{{$shopchunck->id}}"> --}}
                  <input type="checkbox" data-toggle="toggle" data-onstyle="primary" onchange="window.location.href='{{url('/')}}/allproducts/check/{{$shopchunck->id}}'"
                  @if($shopchunck->status=='1')
                  checked/>
                  @else
                  >
                  @endif
                  {{-- </a> --}}
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {!! $shop->links() !!}
        </div>
      </div>
    </div>
  </div>
</body>
</html>