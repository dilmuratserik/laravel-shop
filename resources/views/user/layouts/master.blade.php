<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('user.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->

    @include('user.layouts.header')

    <div class="content-wrapper" >
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row" style="padding:10px;">
                    <div class="col-md-12">
                        @yield('main-content')
                    </div>
                </div>


            </div>


        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('user.layouts.footer')

</div>
<!-- ./wrapper -->
<!-- jQuery -->
</body>
</html>
