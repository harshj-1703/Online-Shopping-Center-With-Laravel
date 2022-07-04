<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTERATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registration.css">

</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  <form action="{{ url('/') }}/registration" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 mb-4">
                          <span class="text-danger">
                              @error('firstname')
                                {{$message}}
                              @enderror
                          </span>
                        <div class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" name="firstname" value="{{old('firstname')}}" />
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
                          <input type="text" id="lastName" class="form-control form-control-lg" name="lastname" value="{{old('lastname')}}"/>
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
        
                            <span class="text-danger">
                                @error('password')
                                  {{$message}}
                                @enderror
                            </span>
                          <div class="form-outline">
                            <input type="password" id="firstName" class="form-control form-control-lg" name="password" />
                            <label class="form-label" for="password">PASSWORD</label>
                          </div>
        
                        </div>
                        <div class="col-md-6 mb-4">
        
                            <span class="text-danger">
                                @error('confirmpassword')
                                  {{$message}}
                                @enderror
                            </span>
                          <div class="form-outline">
                            <input type="password" id="lastName" class="form-control form-control-lg" name="confirmpassword" />
                            <label class="form-label" for="confirmpassword">CONFIRM PASSWORD</label>
                          </div>
        
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                          <span class="text-danger">
                            @error('dob')
                              {{$message}}
                            @enderror
                        </span>
                        <div class="form-outline datepicker w-100">
                          <input type="date" class="form-control form-control-lg" id="birthdayDate" name="dob" value="{{old('dob')}}"/>
                          <label for="birthdayDate" class="form-label">Birthdate</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="F" checked />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="M" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" id="otherGender"
                            value="O" />
                          <label class="form-check-label" for="otherGender">Other</label>

                          {{-- <span class="text-danger">
                            @error('gender')
                              {{$message}}
                            @enderror
                        </span> --}}
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                          <span class="text-danger">
                            @error('email')
                              {{$message}}
                            @enderror
                        </span>
                        <div class="form-outline">
                          <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" value="{{old('email')}}"/>
                          <label class="form-label" for="emailAddress">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                          <span class="text-danger">
                            @error('phoneno')
                              {{$message}}
                            @enderror
                        </span>
                        <div class="form-outline">
                          <input type="tel" id="phoneNumber" name="phoneno" class="form-control form-control-lg" maxlength="10" value="{{old('phoneno')}}"/>
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <span class="text-danger">
                            @error('address')
                              {{$message}}
                            @enderror
                        </span>
                      <textarea name="address" id="area" value="HARSH" style="height: 50px; width:540px;">{{old('address')}}</textarea>
                      <label class="form-label" for="phoneNumber">Address</label>
                  </div>
              </div><br>
                    <div class="row">
                        <div class="col-12">
                          <span class="text-danger">
                              @error('selectsubject')
                                {{$message}}
                              @enderror
                          </span>
                        {{-- <select class="select form-control-lg" name="selectsubject">
                          <option value="1" disabled>CHOOSE SUBJECT</option>
                          <option value="HTML">HTML</option>
                          <option value="CSS">CSS</option>
                          <option value="JAVA SCRIPT">JAVA SCRIPT</option>
                          <option value="PHP">PHP</option>
                        </select> --}}
                        {{-- <label class="form-label select-label">Choose Subject</label> --}}
                        {{-- <div class="mt-6 pt-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                            <input class="btn btn-primary btn-lg pull-right" type="submit" value="REGISTER" name="submit" />
                            {{-- </div> --}}
                    </div>
                </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>