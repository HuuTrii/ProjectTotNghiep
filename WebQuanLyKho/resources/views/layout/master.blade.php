<!DOCTYPE html>
<html lang="en">
 <!-- sua 67, 69, 71, 22, 24, 47, 41, 85, 88 , 144-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content=""> 
        <!-- link poup  -->


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- //////  -->
        <link rel="icon" href="../images/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon//favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16')}}">
        <link rel="manifest" href="{{asset('img/favicon/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <!-- jQuery 3 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--     <script src="../../../../public/assets/vendor_components/jquery/dist/jquery.js"></script> -->
        <!-- <link rel="stylesheet" href="{{asset('assets/vendor_components/jquery/dist/jquery.js')}}"> -->

        <title>Lion Admin - Dashboard</title>
        <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/bootstrap-extend.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor_plugins/iCheck/all.css')}}">

        <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
        

        <link rel="stylesheet" href="{{asset('assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/vendor_components/select2/dist/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor_components/rickshaw-master/rickshaw.min.css')}}">
        <!-- Vector CSS -->
    <!--     <link href="../../../../public/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="{{asset('assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css')}}"> -->
        <!-- Morris charts -->
    <!--     <link rel="stylesheet" href="../../../assets/vendor_components/morris.js/morris.css"> -->
        <link rel="stylesheet" href="{{asset('assets/vendor_components/morris.js/morris.css')}}">
        <!-- theme style -->
        <link rel="stylesheet" href="{{asset('css/main/master_style.css')}}">
        <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> -->

    <body class="hold-transition skin-black sidebar-mini">

        <div class="wrapper" style="overflow-y: hidden;">

            @include('layout.header')
            @include('layout.aside')
            @yield('content_vendor')
            @yield('content_unit')
            @yield('content_products_type')
            @yield('content_promotion')
            @yield('content_products')
            @include('layout.footer')
            <div class="control-sidebar-bg "></div>

        </div>
        <!-- ./wrapper -->

@stack('scripts')
<!-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" type="text/javascript" ></script> -->

        <!-- <script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script> -->
        <!-- jQuery UI 1.11.4 -->
        <!-- <script src="{{asset('assets/vendor_components/jquery-ui/jquery-ui.js ')}}"></script> -->


        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->




        
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>

        <!-- popper -->
        <script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
        <!-- Bootstrap 4.0-->
        <script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- Sparkline -->
        <!-- <script src="{{asset('assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js')}}"></script> -->

        <!-- Vector map JavaScript -->
        <!-- <script src="{{asset('assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.min.js')}}"></script> -->

        <script src="{{asset('assets/vendor_components/jvectormap/lib2/jquery-jvectormap-world-mill-en.js')}}"></script>

        <!-- CHARTS js -->
        <script src="{{asset('assets/vendor_components/chart.js-master/Chart.min.js')}}"></script>

        <!-- FLOT CHARTS -->
        <script src="{{asset('assets/vendor_components/Flot/jquery.flot.js')}}"></script>

        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="{{asset('assets/vendor_components/Flot/jquery.flot.resize.js')}}"></script>

        <!-- rickshaw -->
        <script src="{{asset('assets/vendor_components/rickshaw-master/vendor/d3.v3.js')}}"></script>

        <script src="{{asset('assets/vendor_components/rickshaw-master/rickshaw.min.js')}}"></script>

        <!-- data table -->
        <script src="{{asset('assets/vendor_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

        <script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>

        <script src="{{asset('assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>

        <!-- Morris.js charts -->
        <script src="{{asset('assets/vendor_components/raphael/raphael.min.js')}}"></script>

        <script src="{{asset('assets/vendor_components/morris.js/morris.min.js')}}"></script>


        <!-- Slimscroll -->
        <script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

        <!-- FastClick -->
        <script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

        <!-- peity -->
        <script src="{{asset('assets/vendor_components/jquery.peity/jquery.peity.js')}}"></script>

        <!-- Lion_admin App -->
        <script src="{{asset('js/main/template.js ')}}"></script>


        <!-- Lion_admin dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('js/main/pages/dashboard.js ')}}"></script>


        <script src="{{asset('js/main/main.js')}}"></script>
        <!-- <script src="{{asset('vendor_components/select2/dist/js/select2.full.js')}}"></script> -->
        <script src="{{asset('assets/vendor_plugins/input-mask/jquery.inputmask.js')}}"></script>
        <script src="{{asset('assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
        <script src="{{asset('assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
        <script src="{{asset('assets/vendor_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <!-- <script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script> -->
        <script src="{{asset('js/main/demo.js ')}}"></script>
        <script src="{{asset('assets/vendor_plugins/iCheck/icheck.min.js')}}"></script>
        <script src="{{asset('js/main/pages/advanced-form-element.js')}}"></script>
        <script src="{{asset('assets/vendor_components/formatter/formatter.js')}}"></script>
        <script src="{{asset('assets/vendor_components/formatter/jquery.formatter.js')}}"></script>
        <script src="{{asset('js/main/pages/formatter.js')}}"></script>
        <script src="{{asset('js/main/pages/validation.js')}}"></script>
        <script src="{{asset('js/main/valitation.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('#add_product').click(function() {
                    $('.product_row').append(
                        '  <div class="product_inline"><div class="row" style="padding: 10px 15px;"><strong style="padding-right: 6px;">1.</strong> <span style="line-height: 16px;" class="label label-danger delete_product"><i class="fa fa-trash"></i></span></div><div class="row"><div class="col-md-2"><H6>Mã Sản phẩm</h6><input type="text" class="form-control" id="ssn"></div><div class="col-md-4"><h6>Tên</h6><input type="text" class="form-control" id="ssn"></div><div class="col-md-2"><h6>Số lượng</h6><input type="text" class="form-control" id="ssn"></div><div class="col-md-2"><h6>Đơn giá</h6><input type="text" class="form-control" id="ssn"></div><div class="col-md-2"><h6>Thành tiền</h6><input type="text" class="form-control" id="ssn"></div></div></div> ');});
                $('.delete_product').click(function() {
                    $(this).closest(".product_inline").remove();
                });
            });

            ! function(window, document, $) {
                "use strict";
                $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            }(window, document, jQuery);
        </script>
       
    
 

    </body>

</html>
