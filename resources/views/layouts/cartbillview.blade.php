<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVOICE</title>
    <link rel="stylesheet" href="./css/billview.css">
    <style>
        .noprint{
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <div class="row">
                                <div class="col">
                                    {{-- <a href="javascript:;"> --}}
    												<img src="https://st2.depositphotos.com/5943796/11381/v/450/depositphotos_113815200-stock-illustration-initial-letter-hj-silver-gold.jpg" width="80" alt="">
												{{-- </a> --}}
                                </div>
                                <div class="col company-details">
                                    <h2 class="name">
                                        <a target="_blank" href="javascript:;">
									HJ SHOPPING CENTER
									</a>
                                </div>
                            </div>
                        </header><br>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <?php date_default_timezone_set("Asia/Calcutta"); ?>
                                    <div class="date" align="right"><b>Date of Invoice: {{session('timebuy');}}</b></div>
                                    <div class="col invoice-details"><h4 class="invoice-id">INVOICE ID:-1</h4></div>
                                    <div class="text-gray-light">INVOICE TO:</div>
                                    <h2 class="to">{{session('fname')." ".session('lname');}}</h2><br>
                                    {{-- <div class="address"></div> --}}
                                    <div class="email"><a href="mailto:{{session('email');}}">{{session('email');}}</a></div>
                                </div><br>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-left">PRODUCT NAME</th>
                                        <th class="text-right">QUANTITY</th>
                                        <th class="text-right">PRICE</th>
                                        <th class="text-right">TOTAL</th>
                                    </tr>
                                </thead>
                                <label class="noprint" hidden="hidden">{{$total = 0;}}</label>
                                @foreach($addtocart as $om)
                                <tbody>
                                    <tr>
                                        <td>{{$om->pname}}</td>
                                        <td class="unit">{{$om->quantity}}</td>
                                        <td>{{$om->price}}</td>
                                        <td class="total">{{ $om->quantity * $om->price}}</td>
                                    </tr>
                                </tbody>
                                <label hidden="hidden" class="noprint">{{$total += $om->price * $om->quantity;}}</label>@endforeach
                                <tfoot>
                                    <tr>
                                        <td colspan="3">GRAND TOTAL</td>
                                        <td>{{$total}}</td>
                                    </tr>
                                </tfoot>
                            </table></main>
                            <div class="thanks">Thank you!</div>
                            <div class="notices">
                            </div>
                        </main>
                        <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>