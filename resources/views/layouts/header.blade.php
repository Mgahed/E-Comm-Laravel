<nav class="navbar navbar-expand-lg navbar-dark bg-dark header">
    <a class="navbar-brand" href="">My Work</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="">List</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">Add</a>
            </li>
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
