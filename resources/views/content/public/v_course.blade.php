@extends('layouts.main')
@section('content')
    <header id="page-hero" class="site-header position-relative  site-header" style="width: 100vw; min-height: 40vh;">
        <section class="layout-hero position-absolute d-flex align-items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, .7) 50px, transparent), url({{ asset('assets/img/second-image.jpeg') }}); height: 100%; width: 100%;  filter: blur(0);">
        </section>
        <div class="layout-hero-content position-absolute d-flex align-items-center w-100 h-100">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="header-content col-11 col-sm-10 col-md-9 animated fadeInUp">
                        <h2 class="page-section-title text-light"></h2>
                        <p class="page-section-text text-light d-none d-md-block">

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article id="main-content" class="site-main container mt-3 mb-5">
        <nav class="my-3" aria-label="Page navigation">
            <div class="pagination pagination-sm justify-content-center">
                @if ($coursesPaginated->currentPage() > 1)
                    <div class="page-item">
                        <a class="page-link" href="{{ $coursesPaginated->url($coursesPaginated->currentPage() - 1) }}">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                @else
                    <div class="page-item disabled">
                        <span class="page-link disabled" href="."><i class="fas fa-arrow-left"></i></span>
                    </div>
                @endif
                @foreach ($coursesPaginated->getUrlRange(1, $coursesPaginated->lastPage()) as $page => $url)
                    <div class="page-item {{ $coursesPaginated->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </div>
                @endforeach
                @if ($coursesPaginated->currentPage() < $coursesPaginated->lastPage())
                    <div class="page-item">
                        <a class="page-link" href="{{ $coursesPaginated->url($coursesPaginated->currentPage() + 1) }}">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                @else
                    <div class="page-item disabled">
                        <span class="page-link disabled"><i class="fas fa-arrow-right"></i></span>
                    </div>
                @endif
            </div>
        </nav>
        @foreach ($coursesPaginated as $course)
            <div class="row justify-content-center px-3 px-sm-0 my-5  mb-3 ">
                <div class="col-md-3">
                    <a href="{{ $course['linkedin'] }}" target="_blank" class="d-block mb-1">
                        <img class="item-title shadow-lg w-100 img-fluid rounded" src="{{ $course['image'] }}"
                            alt="{{ $course['title'] }}">
                    </a>
                    <time class="item-date small d-block text-body"
                        datetime="{{ \Carbon\Carbon::parse($course['publishedAt'])->translatedFormat('j F Y') }}">{{ \Carbon\Carbon::parse($course['publishedAt'])->translatedFormat('j F Y') }}</time>
                </div>
                <div class="col-md-9">
                    <a href="{{ $course['linkedin'] }}" target="_blank"
                        class="item-title h2 d-block">{{ $course['title'] }}
                    </a>
                    <p class="item-summary lead mb-1 text-body">{{ $course['description'] }}</p>
                    <div class="item-links">
                        <a href="{{ $course['linkedin'] }}" class="mr-3 mr-lg-1 text-secondary"><i
                                class="fab fa-linkedin mr-1"></i><span class="d-none d-lg-inline text-body">on
                                LinkedIn</a></span>
                    </div>
                    <div class="tagslist d-none d-lg-block mt-2">
                        @foreach ($course['tags'] as $tag)
                            <a href="{{ $tag['url'] }}" class="badge badge-special">{{ $tag['name'] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        <nav class="my-3" aria-label="Page navigation">
            <div class="pagination pagination-sm justify-content-center">
                @if ($coursesPaginated->currentPage() > 1)
                    <div class="page-item">
                        <a class="page-link" href="{{ $coursesPaginated->url($coursesPaginated->currentPage() - 1) }}">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                @else
                    <div class="page-item disabled">
                        <span class="page-link disabled" href="."><i class="fas fa-arrow-left"></i></span>
                    </div>
                @endif
                @foreach ($coursesPaginated->getUrlRange(1, $coursesPaginated->lastPage()) as $page => $url)
                    <div class="page-item {{ $coursesPaginated->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </div>
                @endforeach
                @if ($coursesPaginated->currentPage() < $coursesPaginated->lastPage())
                    <div class="page-item">
                        <a class="page-link" href="{{ $coursesPaginated->url($coursesPaginated->currentPage() + 1) }}">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                @else
                    <div class="page-item disabled">
                        <span class="page-link disabled"><i class="fas fa-arrow-right"></i></span>
                    </div>
                @endif
            </div>
        </nav>

    </article>
@endsection
