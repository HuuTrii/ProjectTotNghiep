
    @extends('layout.master')
    @section('content_products')
    

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Sản Phẩm
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Loại sản phẩm</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sản phẩm</h3>
                        <h6 class="box-subtitle">Tổng hợp tất cả các sẩn phẩm</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example_wrapper" class="dataTables_wrapper">

                                    <!-- button add -->
                                      <!--   <button type="button" class="btn btn-app btn-success" data-toggle="modal" data-target=".bs-example-modal-lg" style="height: 30px;padding: 0;border-radius: 6px;">
                                            <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                                        </button> -->
                                      <!-- button add -->
                                      <!-- button export excel -->
                                        <a href="catalog/export">   
                                            <button type="button" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                                        <span style="font-size: 20px;">
                                                             <i class="fa fa-arrow-down"></i><i class="mdi mdi-file-excel"></i>
                                                        </span>
                                            </button>
                                        </a>
                                            <button type="button" data-toggle="modal" data-target="#modalimport" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                                   <span style="font-size: 20px;">
                                                            <i class="fa fa-arrow-up"></i><i class="mdi mdi-file-excel"></i>
                                                    </span>
                                            </button>                                    
                                             <!-- button export excel -->
                                             <!-- edit button -->
                                            <button type="button" class="btn btn-app btn-success" style="height: 30px;padding: 0;border-radius: 6px;">
                                                   <span style="font-size: 20px;">
                                                            <i class="fa  fa-edit (alias)"></i>
                                            </button>  
                                             <!-- edit button -->   



                                               <!-- modal import -->

                                <div class="modal fade" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                            <form action="{{route('importCatalog')}}" method="POST"  enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">Nhập file excel</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label style="font-weight: bold" >Thêm file</label>
                                                        <input type="file" name="file_import" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Thêm</button>
                                                </div>
                                            </div>
                                        </form>
                                <!-- /.modal-content -->
                                    </div>
                                </div>  
                                <!-- modal import -->
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" style="width: 1000px">
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
                                                            <div class="product_inline" >
                                                                <div class="row" style="padding: 10px 15px;"><strong style="padding-right: 6px;">1.</strong> <span style="line-height: 16px;" class="label label-danger delete_product"><i class="fa fa-trash"></i></span></div>
                                                                <div class="row">
                                                                    <div class="col-md-2" style="padding: 0px 5px;">
                                                                        <H6>Mã Sản phẩm</h6>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-4" style="padding: 0px 5px;">
                                                                        <h6>Tên</h6>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2" style="padding: 0px 5px;">
                                                                        <h6>Số lượng</h6>
                                                                        <input type="number" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2" style="padding: 0px 5px;">
                                                                        <h6>Đơn giá</h6>
                                                                        <input type="text" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-2" style="padding: 0px 5px;">
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

                                <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label></div>
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%;">Mã sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%;">Tên sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Loại sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%">Nhà cung cấp</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Số lượng</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%">Đơn giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%">Hình ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%;">Tương tác</th>
                                        </tr>
                                    </thead>

                                    @foreach($products as $product1)
                                    <tbody>
                                        <tr role="row " class="odd ">
                                            <td class="">{{$product1->id_pro}}</td>
                                            <td class="">{{$product1->name_pro}}</td>
                                            <td class="">{{$product1->name_cata}}</td>
                                            <td class="">{{$product1->name_vendor}}</td>
                                            <td class="">{{$product1->quantity}}</td>
                                            <td class="">{{$product1->price}}đ/ Vỉ</td>
                                            <td class="">none</td>
                                            <td>
                                                <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span>
                                                <span data-toggle="modal" data-target="#modal-edit" class="badge badge-success" style="padding: 1% 5%;"><i class="fa fa-edit "></i></span>
                                            </td>



                                        </tr>

                                    </tbody>
                                   @endforeach
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1 " colspan="1 ">Mã sản phẩm</th>
                                            <th rowspan="1 " colspan="1 ">Tên sản phẩm</th>
                                            <th rowspan="1 " colspan="1 ">Loại sản phẩm</th>
                                            <th rowspan="1 " colspan="1 ">Nhà cung cấp</th>
                                            <th rowspan="1 " colspan="1 ">Số lượng</th>
                                            <th rowspan="1 " colspan="1 ">Đơn giá</th>
                                            <th rowspan="1 " colspan="1 ">Hình ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Tương tác</th>

                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </section>
        </div>
        @endsection