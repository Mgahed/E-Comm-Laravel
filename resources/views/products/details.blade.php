@extends('master')
@section('content')
    <div class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <img class="img-fluid img-details" src="{{$product->gallery}}" alt="product_img">
                </div>
                <div class="col-md-6">
                    <h2>{{$product->name}}</h2>
                    <h4>Category: {{$product->category}}</h4>
                    <h5>Price: {{$product->price}}$</h5>
                    <p>Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci autem culpa delectus
                        doloremque esse ipsa officiis quas ratione sint? Aliquid dolore praesentium quaerat voluptas
                        voluptatibus. Cupiditate eos possimus quia voluptatum!</p>
                    {{--                    increament decreament--}}
                    <form id="FormId">
                        @csrf
                        <div class="product-container">
                            <div class="product-counter">
                                <input class="plus-minus minus" type="button" value="-"/>
                                <input type="hidden" value="{{$product->id}}" name="product_id"/>
                                <input class="quantity" type="text" value="1" name="quantity"/>
                                <input class="plus-minus plus" type="button" value="+"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="offset-6"></div>
                <div class="col-md-auto mb-3">
                    <button id="add_cart" class="btn btn-primary">Add to cart <i class='fas fa-cart-plus'></i></button>
                </div>
                <div class="col-md-auto">
                    <a href="" class="btn btn-success">Buy now <i class='fas fa-money-bill-wave'></i></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click', '#add_cart', function (e) {
            e.preventDefault();
            var Form_Data = new FormData($('#FormId')[0]);
            $.ajax({
                type: 'post',
                // enctype: 'multipart/form-data',
                url: '{{route("product_add_to_cart")}}',
                data: Form_Data,
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    if (data.status == false) {
                        window.location.replace("{{route('login_form')}}");
                    }
                    console.log(data);
                    // }
                },
                error: function (reject) {
                    var a_errors = reject.responseJSON.errors;
                    console.log(a_errors);
                },
            });
        });
    </script>
@endsection()

