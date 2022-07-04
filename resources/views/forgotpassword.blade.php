<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                {{-- <span class="h1 fw-bold mb-0">LOGIN</span> --}}
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form action="{{url('/')}}/forgotpassword" method="post" style="width: 23rem;" >
                    @csrf
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Forgot Password</h3>
      
                  <div class="form-outline mb-4">
                    <span class="text-danger">
                        @error('email')
                          {{$message}}
                        @enderror
                    </span>
                    <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" value="{{old('email')}}"/>
                    <label class="form-label" for="form2Example18">Email address</label>
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Send Mail</button>
                  </div>
                </form>
            </div>
                <a href="{{url('/')}}/login"><button class="btn btn-outline-success margin-right">HOME</button></a>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://media.istockphoto.com/photos/and-a-concept-yellow-question-mark-glowing-amid-black-question-marks-picture-id1305169776?b=1&k=20&m=1305169776&s=170667a&w=0&h=mpYdh2MzGN_rqxoRNlO5KWGCCq3ZktzSfp-wA0nD9no="
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
</body>