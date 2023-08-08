@extends('layouts.main')
@section('content')
    <header id="page-hero" class="site-header position-relative  site-header" style="width: 100vw; min-height: 70vh;">
        <section class="layout-hero position-absolute d-flex align-items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, .7) 50px, transparent), url({{ asset('assets/img/main-image.jpeg') }}); height: 100%; width: 100%; filter: blur(0);">
        </section>
        <div class="layout-hero-content position-absolute d-flex align-items-center" style="height: 115%; width: 100%;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="header-content col-11 col-sm-10 col-md-9 animated fadeInUp">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Seven Logo" class="logo-image" width="300px">
                        <p class="page-section-text text-light">
                            Selamat datang di kursus komprehensif kami tentang pengembangan web modern menggunakan <a
                                class="text-warning font-weight-bold" href="https://codeigniter.com/"
                                target="_blank">CodeIgniter</a>
                            dan <a class="text-warning font-weight-bold" href="https://laravel.com/"
                                target="_blank">Laravel</a>. Kursus ini akan memberdayakan Anda dengan keterampilan dan
                            pengetahuan yang diperlukan untuk membangun aplikasi web dinamis dan tangguh menggunakan dua
                            dari kerangka kerja PHP paling populer di industri.
                        </p>
                        <div><a class="btn btn-lg btn-outline-light" href="https://your-course-website.com/">Jelajahi
                                Kursus</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <article id="main-content" class="page-home site-main container">
        <div class="row">
            <div class="main-content col-md-9">
                <h4 class="family-sans text-secondary my-4 px-3 px-sm-0">Postingan Terakhir</h4>
                @foreach ($posts as $post)
                    <div class="row justify-content-center px-3 px-sm-0 my-5  mb-3 ">
                        <div class="col-md-3">
                            <a href="{{ $post['url'] }}" target="_blank" class="d-block mb-1">
                                <img class="item-title shadow-lg w-100 img-fluid rounded" src="{{ $post['urlToImage'] }}"
                                    alt="{{ $post['title'] }}">
                            </a>
                            <time class="item-date small d-block text-body"
                                datetime="{{ \Carbon\Carbon::parse($post['publishedAt'])->translatedFormat('j F Y') }}">{{ \Carbon\Carbon::parse($post['publishedAt'])->translatedFormat('j F Y') }}</time>
                        </div>
                        <div class="col-md-9">
                            <a href="{{ $post['url'] }}" target="_blank"
                                class="item-title h2 d-block">{{ $post['title'] }}</a>
                            <p class="item-summary lead mb-1 text-body">{{ $post['description'] }}</p>
                            <div class="author text-muted mt-2" style="text-align: right;">By {{ $post['author'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="main-sidebar col-md-3">
                <h4 class="text-secondary my-4 px-3 px-sm-0">Pembelajaran Terakhir</h4>
                @foreach ($courses as $course)
                    <div class="px-3 px-sm-0  mb-3 ">
                        <a href="{{ $course['linkedin'] }}" class="w-100 d-none d-lg-block mb-1">
                            <img class="w-100  shadow-lg img-fluid rounded" src="{{ $course['image'] }}"
                                alt="Svelte: First Look photo">
                        </a>
                        <time class="small d-none d-lg-block text-body"
                            datetime="Invalid DateTime">{{ \Carbon\Carbon::parse($course['publishedAt'])->translatedFormat('j F Y') }}</time>
                        <a href="{{ $course['linkedin'] }}"
                            class="h4 d-block my-1">{{ $course['title'] }}</a>
                        <p class="mb-1  text-body d-none d-lg-block">{{ $course['description'] }}</p>
                        <div class="item-links">
                            <a href="{{ $course['linkedin'] }}" class="mr-3 mr-lg-1 text-secondary"><i class="fab fa-linkedin mr-1"></i><span
                                    class="d-none d-lg-inline text-body">on
                                    LinkedIn</a></span>
                        </div>
                        <div class="mt-1">
                            <div class="tagslist d-none d-lg-block mt-2">
                                @foreach ($course['tags'] as $tag)
                                    <a href="{{ $tag['url'] }}" class="badge badge-special">{{ $tag['name'] }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </article>
@endsection
