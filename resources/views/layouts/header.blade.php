<nav class="navbar navbar-expand-lg navbar-dark bg-dark header" style="z-index: 99;">
    <a class="navbar-brand" href="{{route('products_home')}}"><i class='fas fa-store-alt'></i> Mgahed Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::path() == 'products' ? 'active' : ''}}">
                <a class="nav-link" href="{{route('products_home')}}">Home</a>
            </li>
{{--            <li class="nav-item ">--}}
{{--                <a class="nav-link" href="">Add</a>--}}
{{--            </li>--}}
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
            <div class="nav-item custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="darkSwitch"/>
                <label style="right: 30px;" id="theme-switch" class="custom-control-label" for="darkSwitch"><i
                        class='fas fa-sun' style='font-size:20px;color:#F5B212;'></i></label>
                {{--                🌓--}}
            </div>
            <script src="{{asset('DarkTheme/dark-mode-switch.min.js')}}"></script>
        </ul>
    </div>
</nav>
