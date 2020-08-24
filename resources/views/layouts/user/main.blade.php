<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layouts.user.head')
    @yield('css')
</head>

<body>
    <div class="super_container">
        <!-- Navbar -->
        @include('layouts.user.header')
        <!-- /.navbar -->


        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- footer -->
        @include('layouts.user.footer')
        <!-- end footer -->
    </div>
    @include('layouts.user.script')
    @yield('js')
</body>

</html>
