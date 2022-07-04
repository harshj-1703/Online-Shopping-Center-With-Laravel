<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADD ITEM</title>
        <link rel="stylesheet" href="{{url('/')}}/css/additem.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <html>
<head>   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{url('/')}}/js/adminhome.js"></script>
<link rel="stylesheet" href="{{url('/')}}/css/adminhome.css">   
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
            <li class="nav-item active">
                <a href="{{url('/')}}/additem" class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>ADD PRODUCT</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/')}}/allorder" class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>ALL ORDERS</a>
            </li>
            <li class="nav-item">
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

<div id="FileUpload">
<div class="wrapper">
    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Product Add Form</h3>
    <form action="{{ url('/') }}/additem" method="post" enctype="multipart/form-data">
        @csrf
        <span class="text-danger">
            @error('pname')
                {{$message}}
            @enderror
        </span>
        <input type="text" id="firstName" class="form-control form-control-lg" name="pname" value="{{old('pname')}}" />
        <label class="form-label" for="firstName">Product Name</label>  <br>
        <span class="text-danger">
        @error('pdetail')
            {{$message}}
        @enderror
    </span><br>
        <textarea id="firstName" class="form-control form-control-lg" name="pdetail" >{{old('pdetail')}}</textarea>
        <label class="form-label" for="firstName">Product Details</label>  <br>
        <span class="text-danger">
        @error('pprice')
            {{$message}}
        @enderror
    </span><br>
        <input type="number" id="firstName" class="form-control form-control-lg" name="pprice" value="{{old('pprice')}}" />
        <label class="form-label" for="firstName">Product price</label>  <br>
    <div class="upload">
        {{-- <p>Drag files here or  --}}
            <input type="file" id="actual-btn" name="pfile"/></div>
            <label class="form-label" for="firstName">Product Photo</label><br>
            {{-- <label class="upload__button">Browse</label> --}}
        {{-- </p> --}}
    <span class="text-danger">
        @error('pfile')
            {{$message}}
        @enderror
    </span><br><div align="right">
    <input class="btn btn-primary btn-lg" type="submit" value="CONFIRM" name="submit" /></div>
    </form>
    </div>
  </div>
</body>
</html>