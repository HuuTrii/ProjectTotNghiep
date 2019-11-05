

@extends('layout.master')
@section('content_vendor')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Nhà Cung Cấp
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-folder"></i> Quản lý</a></li>
            <li class="breadcrumb-item"><a href="#">Nhà Cung Cấp</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Nhà cung cấp</h3>
                <h6 class="box-subtitle">Danh Sách</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper">
                            <button type="button" class="btn btn-app btn-success" data-toggle="modal" data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                                   <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                            </button>
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


                                
                            <!-- modal add vendor -->
                            <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <form id="addform" method="POST" novalidate>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Thêm Nhà Cung Cấp</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <label style="font-weight: bold" for="">Nhà cung cấp</label>
                                                      <div class="form-group">
                                                        <input name="name_vendor"  type="text" placeholder="Tên nhà cung cấp" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                      <div class="form-group">
                                                        <label style="font-weight: bold" for="">Điện Thoại</label>
                                                        <input name="phone_number"  type="text" placeholder="Điện thoại" class="form-control" id="phone2">
                                                    </div>
                                                </div>
                                                   
                                            </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label style="font-weight: bold" for="">Địa chỉ</label>
                                                            <input name="adress"  type="text" placeholder="Địa Chỉ" class="form-control">
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="controls"> 
                                                                <label style="font-weight: bold" for="">Email</label>
                                                                <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required" placeholder="Email"> 
                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  
                                                   
                                                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Lưu</button>
                                        </div>
                                    </div>
                                </form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- modal add vendor -->


                            <!-- Modal edit vendor -->
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document" style="max-width: 1000px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">CẬP NHẬT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="editform" >
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <input type="hidden" name="id" id="id">
                                                <div class="form-group">
                                                    <label>Tên Nhà Cung Cấp</label>
                                                    <input type="text" class="form-control" name="name_vendor" id="name_vendor" placeholder="Tên Nhà Cung Cấp">
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa Chỉ</label>
                                                    <input type="text" class="form-control" name="adress" id="adress" placeholder="Địa Chỉ">
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md 6"> 
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                            </div>
                                                    </div>
                                                    <div class="col-md 6">
                                                        
                                                    <div class="form-group">
                                                            <label>Điện Thoại</label>
                                                            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Điện thoại">
                                                     </div>
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Updated</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- modal edit vendor -->
                        <table id="data_vendor" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Tên Nhà Cung Cấp</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%;">Điện Thoại</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%;">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Địa Chỉ</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Tương tác</th>
                                </tr>
                                 @foreach($vendor as $vendor1)
                                        <tr role="row " class="odd ">
                                            <td>{{$vendor1->name_vendor}}</td>
                                            <td>{{$vendor1->phone_number}}</td>
                                            <td>{{$vendor1->email}}</td>
                                            <td>{{$vendor1->adress}}</td>
                                            <td>
                                            <a href=" {{ route('vendorDestroy', $vendor1->id_vendor )}}">  <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span></a>
                                            <a href="#" class="editbtn"> <span  class="badge badge-success  " style="padding: 1% 5%;"><i class="fa fa-edit "></i></span></a>
                                            </td>

                                        </tr>
                                    @endforeach
                            <tfoot>
                                <tr>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Tên Nhà Cung Cấp</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%;">Điện Thoại</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 15%;">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Địa Chỉ</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 20%;">Tương tác</th>
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
@push('scripts')
    <script>
    $(function() {
        $('#data_vendor').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{asset('datatable/list')}}',
            columns: [
                // { data: 'id_vendor', name: 'id_vendor' },
                // { data: 'name_vendor', name: 'name_vendor' },


            ]

        });
    });
    </script>
 @endpush


{{-- ahihi --}}

                <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>



                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.editbtn').on('click',function () {
                            $('#editmodal').modal('show');
                            $tr = $(this).closest('tr');
                            var data = $tr.children("td").map(function () {
                                return $(this).text();
                            }).get();
                            console.log(data);
                            $('#id').val(data[0]);
                            $('#name_vendor').val(data[1]);
                            $('#adress').val(data[4]);
                            $('#email').val(data[3]);
                            $('#phone_number').val(data[2]);
                        });
                        $(editform).on('submit',function (e) {
                            e.preventDefault();
                            var id = $('#id').val();
                            $.ajax({
                                type:"PUT",
                                url:"editVendor/"+ id,
                                data: $('#editform').serialize(),
                                success:function (response) {
                                    console.log(response);
                                    $('#editmodal').modal('hide');
                                    location.reload();
                                    alert("Data Update");
                                },
                                error:function (error) {
                                    alert("Data Not Update");
                                }
                            });
                        });
                    });
                </script>
                <script type="text/javascript">

                    $(document).ready(function(){
                        $(addform).on('submit',function (e) {
                            e.preventDefault();
                            $.ajax({
                                type:"POST",
                                url:"vendoradd",
                                data: $('#addform').serialize(),
                                success:function (response) {
                                    console.log(response);
                                    $('#modaladd').modal('hide');
                                    location.reload();
                                    alert("Data saved");
                                },
                        error:function (error) {
                            alert("Data Not Saved");
                        }
                    });
                });
                });
                </script>
