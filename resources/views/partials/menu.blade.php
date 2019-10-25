<nav id="custom-menu" class="navbar navbar-expand-md navbar-light bg-light">

    <a class="navbar-brand" href="#">
        <img src="/img/menu/logo.png" alt="img" class="position-absolute custom-logo-menu img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-3 mr-lg-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle class-font-text-menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu bg-dropdown" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item class-font-text-menu" href="{{route('menu-han-thuyen')}}">PROPAGANDA <br> HAN THUYEN</a>
                    <a class="dropdown-item class-font-text-menu" href="{{route('menu-saigon-centre')}}">PROPAGANDA <br> SAIGON CENTRE</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link class-font-text-menu" href="{{route('reservations')}}">RESERVATIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link class-font-text-menu" href="{{route('contact')}}">CONTACT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link class-font-text-menu" href="{{route('franchise')}}">FRANCHISE</a>
            </li>

        </ul>
    </div>

</nav>