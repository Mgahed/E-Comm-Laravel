@extends('master')
@section('content')
    <div class="products-home">
        <div id="carouselExampleFade" class="carousel slide" data-ride="carousel"
             style="margin-top: -9px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height:350px;"
                         src="https://image.shutterstock.com/image-vector/vector-illustration-flat-header-internet-260nw-254964874.jpg"
                         class="d-block w-100 img-fluid" alt="first">
                </div>
                <div class="carousel-item">
                    <img style="height:350px;"
                         src="https://www.myonlinestore.com/sites/default/files/styles/header/public/thumbnails/image/blog%20DIY%20maak%20een%20goede%20header_0.jpg"
                         class="d-block w-100 img-fluid" alt="second">
                </div>
                <div class="carousel-item">
                    <img style="height:350px;"
                         src="https://i.pinimg.com/originals/95/44/b6/9544b6a0e1a906b792d305c9951e3eda.png"
                         class="d-block w-100 img-fluid" alt="third">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container mt-5">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-5">
                        <div class="card" style="width: 100%;">
                            <img style="height:250px;" class="card-img-top" src="{{$product->gallery}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">{{$product->description}}</p>
                                <a href="#" class="btn btn-primary">Add to cart <i class='fas fa-cart-plus'></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
