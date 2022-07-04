<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type = "text/javascript">  
      function showpassword() 
      {
        var x = document.getElementById("form2Example28");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      } 
    </script>  
</head>
<body>
<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">
          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">LOGIN</span>
          </div>
  
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
  
            <form action="{{url('/')}}/login" method="post" style="width: 23rem;" >
                @csrf
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
  
              <div class="form-outline mb-4">
                <span class="text-danger">
                    @error('email')
                      {{$message}}
                    @enderror
                </span>
                <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" value="{{old('email')}}"/>
                <label class="form-label" for="form2Example18">Email address</label>
              </div>
  
              <div class="form-outline mb-4">
                <span class="text-danger">
                    @error('password')
                      {{$message}}
                    @enderror
                </span>
                <input type="password" id="form2Example28" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="form2Example28">Password</label>
                {{-- <input type="checkbox" class="form-check-input" name="checkbox" onclick="ShowHideDiv(this)" />  Show Password --}}
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="showpassword()">
                <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
              </div>
              <br>
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
              </div>
  
              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{url('/')}}/forgotpassword">Forgot password?</a></p>
              <p>Don't have an account? <a href="{{ url('/') }}/registration" class="link-info">Register here</a></p>
  
            </form>
  
          </div>
  
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="https://wallpapercave.com/wp/wp5129281.jpg"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>
</body>
</html>