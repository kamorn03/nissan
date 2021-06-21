<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <div class="d-md-none">

            <a href="{{ $content->facebook_link ?? '#' }}"><img class="m-2" style="width :20px;"
                    src="{{ asset('img/social/facebook.svg') }}" /></a>
            <a href="{{ $content->facebook_link ?? '#' }}"><img class="m-2" style="width :25px;"
                    src="{{ asset('img/social/youtube.svg') }}" /></a>
            <a href="{{ $content->facebook_link ?? '#' }}"><img class="m-2" style="width :20px"
                    src="{{ asset('img/social/instagram.svg') }}" /></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-2">
                <li class="nav-item rounded">
                    <a class="nav-link active" aria-current="page" href="#"><i
                            class="bi bi-house-fill me-2"></i>Home</a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link" href="#"><i class="bi bi-people-fill me-2"></i>About</a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link" href="#"><i class="bi bi-telephone-fill me-2"></i>Contact</a>
                </li>
                <li class="nav-item dropdown rounded">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="bi bi-person-fill me-2"></i>Profile</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
