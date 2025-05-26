<header class="header_area">
    <div class="header_navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
    <a class="page-scroll" href="{{ url('/') }}">Home</a>
</li>
<li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
    <a class="page-scroll" href="{{ url('/about') }}">About</a>
</li>
<li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
    <a class="page-scroll" href="{{ url('/services') }}">Services</a>
</li>
<li class="nav-item {{ Request::is('cases') ? 'active' : '' }}">
    <a class="page-scroll" href="{{ url('/cases') }}">Cases</a>
</li>
<li class="nav-item {{ Request::is('growth') ? 'active' : '' }}">
    <a class="page-scroll" href="{{ url('/growth') }}">Growth</a>
</li>
<li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
    <a class="page-scroll" href="{{ url('/team') }}">Team</a>
</li>
</ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" href="{{ url('/services') }}">Get Started</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
