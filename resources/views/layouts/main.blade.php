<!doctype html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="position-relative" data-spy="scroll" data-target=".site-nav" data-offset="55">
    @include('layouts.top-menu')
    @yield('content')
    <footer class="site-footer bg-transparent pb-3 pb-md-5">
        <div class="layout-social container d-flex justify-content-center">
        </div>
    </footer>
    @include('layouts.foot')
</body>

</html>
