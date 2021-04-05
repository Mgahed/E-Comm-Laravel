<nav class="navbar navbar-expand-lg navbar-dark bg-dark header" style="z-index: 99;">
    <a class="navbar-brand" href="{{route('products_home')}}"><i class='fas fa-store-alt'></i> Mgahed Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <span class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::path() == 'products' ? 'active' : ''}}">
                <a class="nav-link" href="{{route('products_home')}}">Home</a>
            </li>
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="">Add</a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="">Cart(<span class="cart-number"></span>)</a>
            </li>
            @if (Request::path() == 'products'||Request::path() == 'products/search')
                <li class="nav-item search-nav-text {{Request::path() == 'products/search' ? 'active' : ''}}" onclick="display_search()" style="cursor:pointer;">
                    <a class="nav-link">search</a>
                </li>
                <form method="get" action="{{route('product_search')}}" class="form-inline my-2 my-lg-0 search-nav-form">
                    @csrf
                    <input class="form-control mr-sm-2" name="ser" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (session()->has('user'))
                        {{session()->get('user')['name']}}
                    @else
                        User
                    @endif
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="transform: translateX(-20px);">
                    @if (!session()->has('user'))
                        <a class="dropdown-item" href="{{route('login_form')}}">Login</a>
                    @else
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    @endif
                </div>
            </li>
            <div class="nav-item custom-control custom-switch mt-2 ml-1">
                <input type="checkbox" class="custom-control-input" id="darkSwitch"/>
                <label style="right: 30px;" id="theme-switch" class="custom-control-label" for="darkSwitch"><i
                        class='fas fa-sun' style='font-size:20px;color:#F5B212;'></i></label>
                {{--                🌓--}}
            </div>
            <script src="{{asset('DarkTheme/dark-mode-switch.min.js')}}"></script>
        </ul>
    </div>
</nav>
<script>
    $.ajax({
        type: 'get',
        // enctype: 'multipart/form-data',
        url: '{{route("get_from_cart")}}',
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            // if (data.status==false){
                $('.cart-number').html(data);
        },
        error: function (reject) {
            var a_errors = reject.responseJSON.errors;
            console.log(a_errors);
        },
    });
</script>
