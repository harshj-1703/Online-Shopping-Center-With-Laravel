<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/')}}/css/registration.css">
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
      </nav>
    {{-- {{session('itemname');}} <br><br>
    {{session('itemdetails');}} --}}

    {{-- <section class="vh-100 gradient-custom"> --}}
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">PAYMENT</h3>
                <form action="{{ url('/') }}/buy" method="get">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        <span class="text-danger">
                            @error('firstname')
                              {{$message}}
                            @enderror
                        </span>
                      <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" name="firstname" value="{{session('fname');}}" />
                        <label class="form-label" for="firstName">First Name</label>
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4">
    
                        <span class="text-danger">
                          @error('lastname')
                            {{$message}}
                          @enderror
                      </span>
                      <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" name="lastname" value="{{session('lname');}}"/>
                        <label class="form-label" for="lastName">Last Name</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        <span class="text-danger">
                            @error('itemname')
                              {{$message}}
                            @enderror
                        </span>
                      <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" name="itemname" value="{{session('itemname');}}" disabled/>
                        <label class="form-label" for="firstName">Product Name</label>
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4">
    
                        <span class="text-danger">
                          @error('itemprice')
                            {{$message}}
                          @enderror
                      </span>
                      <div class="form-outline">
                        <input type="number" id="lastName" class="form-control form-control-lg" name="itemprice" value="{{session('itemprice');}}" disabled/>
                        <label class="form-label" for="lastName">Product Price</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      {{-- <div class="form-outline">
                        <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" value="{{old('email')}}"/>
                        <label class="form-label" for="emailAddress">Email</label>
                      </div>
    
                    </div> --}}
                    {{-- <div class="col-md-6 mb-4 pb-2"> --}}
    
                        <span class="text-danger">
                          @error('phoneno')
                            {{$message}}
                          @enderror
                      </span>
                      <div class="form-outline">
                        <input type="tel" id="phoneNumber" name="phoneno" class="form-control form-control-lg" maxlength="10" value="{{session('phoneno');}}"/>
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                      </div>
                    {{-- </div> --}}
                  </div>
                  <div class="row">
                      <div class="col-12">
                        {{-- <span class="text-danger">
                            @error('selectsubject')
                              {{$message}}
                            @enderror
                        </span>
                      <select class="select form-control-lg" name="selectsubject">
                        <option value="1" disabled>CHOOSE SUBJECT</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="JAVA SCRIPT">JAVA SCRIPT</option>
                        <option value="PHP">PHP</option>
                      </select>
                      <label class="form-label select-label">Choose Subject</label> --}}
                      {{-- <div class="mt-6 pt-2"> --}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input class="btn btn-primary btn-lg pull-right" type="submit" value="BUY" name="submit" />
                          {{-- </div> --}}
                  </div>
              </div>
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
{{-- <br>
<div class="container" align="center">
  <a href="{{url('/')}}/logout"><button class="btn btn-outline-danger margin-right">Logout</button></a>
</div> --}}
</body>
</html>