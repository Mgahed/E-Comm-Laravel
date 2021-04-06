@extends('master')
@section('content')
    <div class="container">
        <div class="py-5 text-center">

            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form
                group has a validation state that can be triggered by attempting to submit the form without completing
                it.</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{count($products)}}</span>
                </h4>
                <ul class="list-group mb-3">
                    @php($total=0)
                    @foreach ($products as $product)
                        <li class="list-group-item d-flex justify-content-between lh-condensed bg-light">
                            <div>
                                <h6 class="my-0">{{$product->name}}</h6>
                            </div>
                            <span class="text-muted">${{$product->price}}</span>
                        </li>@php($total+=$product->price)
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <span>Total (USD)</span>
                        <strong>${{$total-5}}</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{route('insert_order')}}" method="post" class="needs-validation">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Full name</label>
                            <input type="text" name="name"  class="form-control" id="firstName" placeholder="Full Name" value="" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="state">City</label>
                            <select name="city" class="custom-select d-block w-100" id="state" required>
                                <option disabled selected>Choose...</option>
                                <option value="cairo">Cairo</option>
                                <option value="Alexandria">Alexandria</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4" style="border: 1px solid #595960;">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="form-check">
                            <input id="Visa" name="paymentMethod" type="radio" class="form-check-input" value="Visa"
                                   checked required>
                            <label class="form-check-label" for="Visa">Visa</label>
                        </div>
                        <div class="form-check">
                            <input id="MasterCard" name="paymentMethod" type="radio" class="form-check-input"
                                   value="MasterCard"
                                   required>
                            <label class="form-check-label" for="MasterCard">MasterCard</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" value="paypal"
                                   required>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="visa_master">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="">
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="">
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="">
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="">
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="paypal" style="display:none;">
                        <div class="mb-3">
                            <label for="paypalemail">Paypal Email</label>
                            <input type="email" class="form-control" id="paypalemail" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid paypal email address.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4" style="border: 1px solid #595960;">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now <i class='fas fa-money-bill-wave'></i></button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).on('change', 'input[name="paymentMethod"]', function (e) {
            e.preventDefault();
            // alert($('input[name="paymentMethod"]:checked').val());
            if ($('input[name="paymentMethod"]:checked').val() === 'paypal') {
                $('.visa_master').hide();
                $('.paypal').show('slow');
                setTimeout(function(){ var n = $(document).height();
                    $('html, body').animate({ scrollTop: n }, 50); }, 500);
            } else {
                $('.paypal').hide();
                $('.visa_master').show('slow');
                setTimeout(function(){ var n = $(document).height();
                    $('html, body').animate({ scrollTop: n }, 50); }, 500);
            }
        });
    </script>
@endsection
