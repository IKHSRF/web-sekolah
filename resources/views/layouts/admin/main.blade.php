<!DOCTYPE html>
<html>

<head>
   @include('layouts.admin.head')
   <link type="text/css" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
   <link type="text/js" href="cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"/>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.admin.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
       @include('layouts.admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- footer -->
       @include('layouts.admin.footer')
        <!-- end footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

   @include('layouts.admin.script')
   @yield('js')
</body>

</html>
