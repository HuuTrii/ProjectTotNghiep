<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon//favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16')}}">
    <link rel="manifest" href="{{asset('img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <!-- jQuery 3 -->
    <script src="{{asset('assets/vendor_components/jquery/dist/jquery.js')}}"></script>

    <title>CloudStock | Reset Password</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}" >
    <!--     <link href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet"> -->
    <!-- Bootstrap extend-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main/bootstrap-extend.css')}}">
        <!--     <link href="{{asset('css/main/bootstrap-extend.css')}}"> -->


    <!-- rickshaw-->
     <link href="{{asset('assets/vendor_components/rickshaw-master/rickshaw.min.css')}}" rel="stylesheet"  />

    <!-- Vector CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css')}}"  />

    <!-- Morris charts -->
    <link rel="stylesheet" href="{{asset('assets/vendor_components/morris.js/morris.css')}}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{asset('css/main/master_style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!-- Lion_admin skins -->
    <!-- <link rel="stylesheet" href="../../../../public/css/main/skins/_all-skins.css"> -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
	
<body class="hold-transition bg-img" style="background: url({{asset('img/7-1.jpg')}});" data-overlay="4">
	
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-lg-8 col-md-11 col-12">
				<div class="row align-items-center justify-content-md-center h-p100" data-overlay-light="9">
					<div class="col-lg-5 col-md-6 col-12">
					 <div class="p-40 text-center content-bottom">

                            <img src="{{asset('img/logo.svg')}}" alt="" style="padding-left: 10%;" width="80%">
                        </div>
					</div>
					<div class="col-lg-7 col-md-6 col-12">
						<div class="p-20 content-bottom">
							<div class="content-top-agile">
								<h2>Khôi phục mật khẩu</h2>
							</div>
							<form action="../../index.html" method="post">
								<div class="form-group">
									<div class="input-group mb-3">
										<input type="email" class="form-control" placeholder="Email">
										<div class="input-group-prepend">
											<span class="input-group-text bg-success border-success" style="background-color: #398bf7 !important;"><i class="ti-email"></i></span>
										</div>
									</div>
								</div>
								  <div class="row">
									<div class="col-12 text-center">
									  <button type="submit" class="btn bg-success btn-block" style="background-color: #398bf7 !important;">Gửi mã</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>		
						</div>
					</div>
				</div>
				
				
			</div>
			
			
		</div>
	</div>
	

<!-- /.login-box -->


    <script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('js/main/demo.js')}}"></script>
    <script src="{{asset('assets/vendor_components/formatter/formatter.js')}}"></script>
    <script src="{{asset('assets/vendor_components/formatter/jquery.formatter.js')}}"></script>
    <script src="{{asset('js/main/pages/formatter.js')}}"></script>
    <script src="{{asset('js/main/pages/validation.js')}}"></script>
    <script src="{{asset('js/main/valitation.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>

</body>		

</html>
