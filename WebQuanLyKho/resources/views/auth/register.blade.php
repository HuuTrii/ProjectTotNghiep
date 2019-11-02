@extends('layout.app')

@section('content')
            <div class="col-lg-8 col-md-11 col-12">
                <div class="row align-items-center justify-content-md-center h-p100" data-overlay-light="9">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="p-40 text-center content-bottom">

                            <img src="{{asset('img/logo.svg')}}" alt="" style="padding-left: 10%;" width="80%">
                            <div class="text-center">
                                <p class="mt-20">Đăng kí với</p>
                                <p class="gap-items-2 mb-0">
                                    <a class="btn btn-social-icon btn-outline btn-circle btn-facebook" href="#"><i style="margin-top: 22%;" class="fab fa-facebook-square"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-circle btn-twitter" href="#"><i style="margin-top: 22%;" class="fab fa-twitter-square"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-circle btn-google" href="#"><i  style="margin-top: 22%;" class="fab fa-google-plus-square"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="p-20 content-bottom">
                            <div class="content-top-agile">
                                <h2>Đăng kí thành viên mới</h2>
                                <p class="text-fade">Đăng kí để sự dụng</p>
                            </div>
                            <form  method="POST" action="{{ route('register') }}" novalidate>
                                  @csrf

                                <div class="row">
                                    <div class="col-md-6">    
                                        <div class="form-group">
                                            <div class="controls">
                                                <div class="input-group mb-3">
                                                       <input type="text" name="text" class="form-control" required="" data-validation-required-message="This field is required" minlength="2" maxlength="6" placeholder="Họ" aria-invalid="false"> 
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
                                                    </div>
                                                </div>
                                                 <div class="help-block"></div>
                                             </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">    
                                        <div class="form-group">
                                            <div class="controls">
                                                <div class="input-group mb-3">
                                                       <input type="text" name="text" class="form-control" required="" data-validation-required-message="This field is required" minlength="2" maxlength="6" placeholder="Tên" aria-invalid="false"> 
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
                                                    </div>
                                                </div>
                                                 <div class="help-block"></div>
                                             </div>
                                        </div>
                                    </div>
                                </div>    
                                 <div class="form-group">
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                            <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false" placeholder="Mật Khẩu">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-info border-info" ><i class="fa fa-unlock-alt"></i></span>
                                            </div>     
                                        </div> 
                                        <div class="help-block"></div>    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <div class="input-group mb-3">
                                           <input type="password" name="password_confirmation" data-validation-match-match="password" class="form-control" required="" aria-invalid="true" placeholder="Xác nhận mật khẩu">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-info border-info" ><i class="fa fa-asterisk"></i></span>
                                            </div>     
                                        </div> 
                                        <div class="help-block"></div>    
                                    </div>
                                </div>
                                   <div class="row">
                                    <div class="col-md-6">    
                                      <div class="form-group">
                                            <div class="controls">
                                                    <div class="input-group mb-3">
                                                        <input type="email" name="email" class="form-control" autocomplete="off" required data-validation-required-message="This field is required" placeholder="Email"> 
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-info border-info" ><i class="fas fa-at"></i></span>
                                                        </div>
                                                    </div>
                                                <div class="help-block"></div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-md-6">    
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Số điện thoại" id="phone2">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-info border-info"><i class="fa fa-phone"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="" id="">
                                            <option style="color:#495057" value>--Vị trí muốn đăng kí--</option>
                                            <option style="color:#495057" value="">Quản lý kho</option>
                                            <option style="color:#495057" value="">Kế toán</option>
                                        </select>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ion ion-log-in"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1">
                                            <label for="basic_checkbox_1">Tôi đồng ý với<a href="#" style="color: rgb(3, 169, 243);"><b> các điều khoản</b></a></label>
                                        </div>
                                    </div>
                                    <!-- /.col -->

                                    <div class="col-12 text-center">
                                        <button class="btn btn-info btn-block margin-top-10">ĐĂNG KÍ</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <div class="text-center">
                                <p class="mb-0 mt-10">Tôi đã có tài khoản <a class="text-info ml-5" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
@endsection
