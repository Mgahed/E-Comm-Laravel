@extends('master')
@section('content')
    <!--Section: Block Content-->
    <section class="container">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-8">

                <!-- Card -->
                <div class="card wish-list mb-3">
                    <div class="card-body">

                        <h5 class="mb-4">Cart</h5>
                        @php($total = 0)
                        @foreach ($products as $product)
                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <a href="{{route('product_details',$product->id)}}">
                                            <div class="mask waves-effect waves-light">
                                                <img class="img-fluid w-100" src="{{$product->gallery}}">
                                                <div class="mask rgba-black-slight waves-effect waves-light"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between row">
                                            <div class="col-md-6">
                                                <h5>{{$product->name}}</h5>
                                                <p class="mb-3 text-muted text-uppercase small">{{$product->description}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="def-number-input number-input safari_only mb-0 w-100">
                                                    <div class="product-container">
                                                        <div class="product-counter" style="width: 100%!important;">
                                                            <input class="plus-minus minus" style="margin-right: -5px;" type="button" value="-"/>
                                                            <input type="hidden" value="{{$product->id}}" name="product_id"/>
                                                            <input class="quantity" type="text" value="1" name="quantity"/>
                                                            <input class="plus-minus plus" type="button" value="+"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{route('cart_remove',$product->id)}}" type="button"
                                                   class="card-link-secondary small text-uppercase mr-3"><i
                                                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                                <a href="#!" type="button"
                                                   class="card-link-secondary small text-uppercase Move-to-wish-list"><i
                                                        class="fas fa-heart mr-1"></i> Move to wish list </a>
                                            </div>
                                            <p class="mb-0"><span><strong>${{$product->price}}</strong></span></p>
                                            @php($total+=$product->price)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4" style="border: 1px solid #595960;">
                        @endforeach
                        <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase,
                            adding
                            items to your cart does not mean booking them.
                        </p>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">

                        <h5 class="mb-4">Expected shipping delivery</h5>

                        <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">

                        <h5 class="mb-4">We accept</h5>

                        <img class="mr-2" width="45px"
                             src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                             alt="Visa">
                        <img class="mr-2" width="45px"
                             src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                             alt="Mastercard">
                        <img class="mr-2" width="45px"
                             src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                             alt="PayPal acceptance mark">
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4">

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">

                        <h5 class="mb-3">The total amount of</h5>

                        <div class="">
{{--                            <div class="d-flex justify-content-between align-items-center border-0 px-0 pb-0">--}}
{{--                                Temporary amount--}}
{{--                                <span>$25.98</span>--}}
{{--                            </div>--}}
                            <div class="d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Free</span>
                            </div>
                            <hr class="mb-4" style="border: 1px solid #595960;">
                            <div class="d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>The total amount of</strong>
                                    <strong>
                                        <p class="mb-0">(including VAT)</p>
                                    </strong>
                                </div>
                                <span><strong>${{$total}}</strong></span>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary btn-block waves-effect waves-light">go to
                            checkout
                        </button>

                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Block Content-->
@endsection
