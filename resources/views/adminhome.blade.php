<html>
<head>   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{url('/')}}/js/adminhome.js"></script>
<link rel="stylesheet" href="{{url('/')}}/css/adminhome.css">
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<title>ADMIN HOME</title>
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
                <li class="nav-item active">
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
    </nav><br>
    <div style="text-align: center;"><h4 style="font-family: 'Courier New', Courier, monospace;font-weight:bold;color:rgb(1, 1, 165);">
        BAR CHART OF PRODUCT TOTAL SOLD</h1></div>
    <br>
    <div class="chart-container">
        <div class="bar-chart-container">
          <canvas id="canvas" height="100" width="300"></canvas>
        </div>
      </div>
    <script>
    var pname = <?php echo $pname; ?>;
        var total = <?php echo $total; ?>;
        var barChartData = {
            labels: pname,
            datasets: [{
                label: 'SOLD',
                backgroundColor: "skyblue",
                data: total
            }]
        };
    
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderColor: '#ffa0a0',
                            borderSkipped: 'bottom'
                        }
                    },
                    responsive: true,
                    title: {
                        display: true,
                        text: 'ITEMS SOLD'
                    }
                }
            });
        };  
    </script>
    <br>
</body>
</html>