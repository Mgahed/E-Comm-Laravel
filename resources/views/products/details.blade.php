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
                </div>
            </div>
            <br>
            <div class="row">
                <div class="offset-6"></div>
                <div class="col-md-auto mb-3">
                    <a href="" class="btn btn-primary">Add to cart <i class='fas fa-cart-plus'></i></a>
                </div>
                <div class="col-md-auto">
                    <a href="" class="btn btn-success">Buy now <i class='fas fa-money-bill-wave'></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection()
