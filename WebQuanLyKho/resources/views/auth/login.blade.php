@extends('layout.app')

@section('content')
            <div class="col-lg-8 col-md-11 col-12">
                <div class="row align-items-center justify-content-md-center h-p100" data-overlay-light="9" style="background-color: rgb(255,255,255,0.8);">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="p-40 text-center content-bottom">
                            <img src="{{asset('img/logo.svg')}}" alt="" style="padding-left: 10%;" width="80%">
                            <div class="text-center">
                                <p class="mt-20">Đăng nhập với</p>
                                <p class="gap-items-2 mb-0">
                                     <p class="gap-items-2 mb-0">
                                    <a class="btn btn-social-icon btn-outline btn-circle btn-facebook" href="#"><i style="margin-top: 22%;" class="fab fa-facebook-square"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-circle btn-twitter" href="#"><i style="margin-top: 22%;" class="fab fa-twitter-square"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-circle btn-google" href="#"><i  style="margin-top: 22%;" class="fab fa-google-plus-square"></i></a>
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="p-20 content-bottom">
                            <div class="content-top-agile" style="
    padding-left: 4%;
">
                                <h2 style="font-weight: bold;">Đăng nhập</h2>
                                <p class="text-fade">Đăng nhập để truy cập quyền của bạn</p>
                            </div>
                              <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                         

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                         

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 offset-md-12">
                                <div class="form-check" style="padding-left: 0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Nhớ tài khoản') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                     
                                <div class="row">
                                    
                               
                              <div class="col-6">
                                        <div class="col-md-10 text-center">
                                            <button type="submit" class="btn btn-danger btn-block margin-top-10">ĐĂNG NHẬP</button>
                                        </div>
    
                                </div>
                                <div class="col-6" style="line-height: 30px">
                                        @if (Route::has('password.request'))
                                            <a style="line-height: 43px;" class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Quên mật khẩu?') }}
                                             </a>
                                        @endif
                                </div>
                             </div>
                           
                      
                    </form>

                            <div class="text-center">
                                <p class="mb-0 mt-10">Bạn chưa có tài khoản?<a href="register" >
                            @if (Route::has('register'))
                                
                                    <a class="text-info ml-5" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
                                
                            @endif

                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
@endsection
