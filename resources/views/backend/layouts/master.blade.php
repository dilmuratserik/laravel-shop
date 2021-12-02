<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')

<body>
<!-- Site wrapper -->
<div class="container-scroller">
@include('backend.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->

    @include('backend.layouts.header')

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
        @include('backend.layouts.footer')

</div>
<!-- ./wrapper -->
<!-- jQuery -->
</body>
</html>
