<html>
<head>
    <title>Paypal Integration</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        /* Alert Messages */
        .alert {
            padding: 8px 35px 8px 14px;
            margin-bottom: 18px;
            color: #c09853;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color: #fcf8e3;
            border: 1px solid #fbeed5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        .alert-heading {
            color: inherit;
        }
        .alert .close {
            position: relative;
            top: -2px;
            right: -21px;
            line-height: 18px;
        }
        .alert-success {
            color: #468847;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-danger,
        .alert-error {
            color: #b94a48;
            background-color: #f2dede;
            border-color: #eed3d7;
        }
        .alert-info {
            color: #3a87ad;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }
        .alert{
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body>
    <div class="w3-container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                <?php Session::forget('success');?>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                <?php Session::forget('error');?>
            @endif

            @if(session()->has('info'))
                <div class="alert alert-info">
                    {!! session()->get('info') !!}
                </div>
            @endif

        <form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
        action="{!! URL::to('paypal') !!}">
            <div class="w3-container w3-teal W3-padding-16">Paywith Paypal</div>
            {{csrf_field()}}
            <h2>Payment Form</h2>
            <p>Demo Paypal form - integration paypal in laravel</p>
            <label class="w3-text-blue"><b>Enter Amount</b></label>
            <input class="w3-input w3-border" id="amount" type="text" name="amount">
            <button class="w3-btn w3-blue" style="margin-top: 15px;">Pay with PayPal</button>
        </form>
    </div>
</body>
</html>