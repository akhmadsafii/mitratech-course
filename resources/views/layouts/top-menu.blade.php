<nav class="site-nav family-sans navbar navbar-expand-md navbar-dark  fixed-top  py-0">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler my-2 my-md-0" data-toggle="collapse" data-target="#myTogglerNav"
            aria-controls="myTogglerNav" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand text-uppercase">
            <a class="text-light" href="/">
                <img src="{{ asset('assets/img/logo-white.png') }}" alt="Mitratech Logo" class="mr-2" width="130px">
            </a>
        </div>
        <div class="collapse navbar-collapse text-center mt-0" id="myTogglerNav">
            <div class="navbar-nav ml-auto font-weight-regular text-uppercase">
                <a class="d-none nav-item nav-link" href="#page-hero">hero target</a>
                <a class="d-none nav-item nav-link" href="#main-content">nav target</a>
                <a class="nav-item nav-link  {{ request()->is('/') ? 'font-weight-bold text-light' : '' }}" href="/"><i class="fas fa-home"></i></a>
                <a class="nav-item nav-link {{ request()->is('courses') ? 'font-weight-bold text-light' : '' }}" href="{{ route('course') }}">Pembelajaran</a>
                <a class="nav-item nav-link {{ request()->is('blogs') ? 'font-weight-bold text-light' : '' }}" href="{{ route('blog') }}">Artikel</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item text-capitalize text-normal" href="/projects/seven/"><i
                                class="fas fa-atom"></i> seven</a><a class="dropdown-item text-capitalize text-normal"
                            href="/projects/rayveal/"><i class="fas fa-atom"></i> rayveal</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item text-capitalize" href="/about">About Me</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-capitalize" target="_blank"
                            href="https://github.com/planetoftheweb">
                            <i class="fab fa-github text-secondary mr-2"></i>github
                        </a><a class="dropdown-item text-capitalize" target="_blank"
                            href="https://linkedin.com/in/planetoftheweb">
                            <i class="fab fa-linkedin text-secondary mr-2"></i>linkedin
                        </a><a class="dropdown-item text-capitalize" target="_blank"
                            href="https://twitter.com/planetoftheweb">
                            <i class="fab fa-twitter text-secondary mr-2"></i>twitter
                        </a><a class="dropdown-item text-capitalize" target="_blank"
                            href="https://dribbble.com/planetoftheweb">
                            <i class="fab fa-dribbble text-secondary mr-2"></i>dribble
                        </a><a class="dropdown-item text-capitalize" target="_blank"
                            href="https://www.flickr.com/photos/planetoftheweb/sets/72157602932636630/">
                            <i class="fab fa-flickr text-secondary mr-2"></i>flickr
                        </a><a class="dropdown-item text-capitalize" target="_blank"
                            href="https://www.youtube.com/user/planetoftheweb">
                            <i class="fab fa-youtube text-secondary mr-2"></i>youtube
                        </a><a class="dropdown-item text-capitalize" target="_blank"
                            href="https://www.instagram.com/iviewsource">
                            <i class="fab fa-instagram text-secondary mr-2"></i>instagram
                        </a>
                    </div>
                </div>
            </div>
            <div class="searchbox pl-2 py-2">
                <input type="text" class="form-control text-white border m-auto short" id="searchInput"
                    style="background: transparent;" aria-describedby="searchinput" autocomplete="off">
                <div class="position-absolute justify-content-center" style="top: 47px; display: none;"
                    id="searchResults">
                    <div class="card bg-secondary">
                        <ul class="list-group list-group-flush px-0" id="resultList">
                            <!-- Hasil pencarian akan ditambahkan di sini menggunakan jQuery -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
