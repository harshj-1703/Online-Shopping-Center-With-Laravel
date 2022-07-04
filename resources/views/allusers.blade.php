<html>
<head>   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            <li class="nav-item active">
                <a href="{{url('/')}}/allusers" class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>ALL USERS</a>
            </li>
            <li class="nav-item">
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
              <th class="table__th">FIRST NAME</th>
              <th class="table__th">LAST NAME</th>
              <th class="table__th">DATE OF BIRTH</th>
              <th class="table__th">GENDER</th>
              <th class="table__th">EMAIL</th>
              <th class="table__th">PHONE NUMBER</th>
              <th class="table__th">ADDRESS</th>
              <th class="table__th">REGISTRATION TIME</th>
            </tr>
          </thead>
          @foreach($registration as $data)
          <tbody class="table__tbody">
            <tr class="table__tr">
              <td class="table__td">
                <span class="table__value">{{$data->fname}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$data->lname}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">
                    {{date('d-m-Y', strtotime($data->dob));}}
                </span>
              </td>
              <td class="table__td">
                <span class="table__value">@if($data->gender == 'M')
                        MALE
                        @elseif($data->gender == 'F')
                        FEMALE
                        @else
                        OTHER
                        @endif
                </span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$data->email}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$data->phoneno}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$data->address}}</span>
              </td>
              <td class="table__td">
                <span class="table__value">{{$data->created_at}}</span>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {!! $registration->links() !!}
        </div>
      </div>
    </div>
  </div>
</body>
</html>