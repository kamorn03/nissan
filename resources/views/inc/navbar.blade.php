<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <div class="d-md-none">
            <a href="{{ $content->facebook_link ?? '#' }}"><img class="m-2" style="width :20px;"
                    src="{{ asset('img/social/facebook.svg') }}" /></a>
            {{-- <a href="{{ $content->youtube_link ?? '#' }}"><img class="m-2" style="width :25px;"
                    src="{{ asset('img/social/youtube.svg') }}" /></a>
            <a href="{{ $content->instagram_link ?? '#' }}"><img class="m-2" style="width :20px"
                    src="{{ asset('img/social/instagram.svg') }}" /></a> --}}
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-2">
                <li class="nav-item rounded">
                    <a class="nav-link" href="{{ $content->facebook_link ?? '#' }}"><img class="m-2"
                            style="width :20px;" src="{{ asset('img/social/facebook.svg') }}" /></a>
                </li>
                {{-- <li class="nav-item rounded">
                    <a class="nav-link"  href="{{ $content->youtube_link ?? '#' }}"><img class="m-2" style="width :25px;"
                            src="{{ asset('img/social/youtube.svg') }}" /></a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link"  href="{{ $content->instagram_link ?? '#' }}"><img class="m-2" style="width :20px"
                            src="{{ asset('img/social/instagram.svg') }}" /></a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
