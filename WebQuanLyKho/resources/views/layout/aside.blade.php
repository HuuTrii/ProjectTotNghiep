      


        <aside class="main-sidebar">
            <!-- sidebar -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="ulogo">
                        <a href="">
                            <!-- logo for regular state and mobile devices -->
                            <span><b><img src="{{asset('img/logo-light.svg')}}" style="padding: 0% 0% 5% 5%;"  alt="" width="45%"></b>Admin</span>
                        </a>
                    </div>  
                    <div class="image">
                        <img src="{{asset('img/icon.png')}}" class="rounded-circle" alt="User Image">

                    </div>

                    <div class="info">
                        <p>Minh Hiếu</p>
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
                    </div>
                </div>
                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="nav-devider"></li>
                    <li class="header nav-small-cap">PERSONAL</li>

                    <li class="active">
                        <a href="products">
                            <i class="fa fa-barcode"></i>
                            <span href="products_type">Sản Phẩm</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Quản lý</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="products_type">Loại sản phẩm</a></li>
                            <li><a href="unit">Đơn vị</a></li>
                            <li><a href="vendor">Nhà cung cấp</a></li>
                            <li><a href="promotion">Khuyến mãi</a></li>
                        </ul>
                    </li>
                      <li class="treeview">
                        <a href="#">
                            <i class="fa fa-arrows-h"></i>
                            <span>Nhập/Xuất</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="products_type" data-toggle="modal" data-target=".bs-example-modal-lg">Nhập kho</a></li>
                            <li><a href="unit">Xuất kho</a></li>
                        </ul>
                    </li>


                </ul>
            </section>
               <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                        <form action="">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">PHIẾU NHẬP KHO</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label style="padding: 1% 1%;">Nhà cung cấp</label>
                                                                    <select class="form-control" tabindex="-1" aria-hidden="true">
                                                                        <option selected="selected">Chọn nhà cung cấp</option>
                                                                        <option>Coca-Cola</option>
                                                                        <option>Pepsi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" >
                                                            <h3 style="padding: 15px;padding-bottom: 0;">Sản phẩm</h3>
                                                            <span id="add_product" class="label label-success" style="height: 17px;margin-top: 32px;">Thêm</span>
                                                        </div>
                                                        <div class="product_row">
                                                            <div class="product_inline">
                                                                <div class="row" style="padding: 10px 5px;"><strong style="padding-right: 6px;">1.</strong> <span style="line-height: 16px;" class="label label-danger delete_product"><i class="fa fa-trash"></i></span></div>
                                                                <div class="row">
                                                                    <div class="col-md-2" >
                                                                        <H6>Mã Sản phẩm</h6>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-4" >
                                                                        <h6>Tên</h6>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2" >
                                                                        <h6>Số lượng</h6>
                                                                        <input type="number" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2" >
                                                                        <h6>Đơn giá</h6>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2" >
                                                                        <h6>Thành tiền</h6>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <button type="button" class="btn btn-bold btn-pure btn-primary float-right">Thêm</button>
                                                    <button type="button" class="btn btn-bold btn-pure btn-success float-right">Nhập lại</button>
                                                </div>
                                            </div>
                                        </form>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
        </aside>