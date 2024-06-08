<!DOCTYPE html>
<html lang="en">

    @include('particial._head')

    <body class="sb-nav-fixed">
       @include('particial._nav')
        <div id="layoutSidenav">
           @include('particial._sidebar')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('particial._footer')
            </div>
        </div>
        @include('particial._script')
    </body>
</html>
