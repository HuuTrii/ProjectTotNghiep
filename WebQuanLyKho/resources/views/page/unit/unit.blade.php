@extends('layout.master')
@section('content_unit')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Đơn vị
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Quản lý</a></li>
                <li class="breadcrumb-item"><a href="#">Đơn Vị</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Đơn Vị</h3>
                    <h6 class="box-subtitle">Danh Sách</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <!-- botton add -->
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
                            <!-- modal add unit -->
                            <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg" style="min-width: 1000px;">
                                    <form id="addform" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Thêm Đơn Vị</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Tên đơn vị</label>
                                                            <input name="name_unit" type="text" placeholder="Tên loại" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Tên viết tắt</label>
                                                            <input name="acronym" type="text" placeholder="Tên viết tắt" class="form-control">
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
                            <!-- modal add unit -->


                            <!-- Modal edit unit -->
                            <div class="modal fade bs-example-modal-lg" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document" style="max-width: 1000px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">CẬP NHẬT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="editform">
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                {{method_field('PUT')}}
                                                <input type="hidden" name="id" id="id">
                                                 <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Tên đơn vị</label>
                                                            <input name="name_unit" type="text" id="name_unit" placeholder="Tên loại" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Tên viết tắt</label>
                                                            <input name="acronym" type="text" id="acronym" placeholder="Tên viết tắt" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer" style="min-width: 1000px;">
                                                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-bold btn-pure btn-success float-right">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- modal edit unit -->
                            <table id="data_unit" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Tên Đơn vị</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 25%;">Tên viết tắt</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 30%;">Tương tác</th>
                                </tr>
                                </thead>
                                @foreach($unit as $unit1)
                                    <tr role="row " class="odd ">
                                        <td style="display:none">{{$unit1->id_unit}}</td>
                                        <td>{{$unit1->name_unit}}</td>
                                        <td>{{$unit1->acronym}}</td>
                                        <td>
                                            <a href=" {{ route('unitDestroy', $unit1->id_unit )}}"> <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span></a>
                                            <a href="#" class="editbtn"> <span class="badge badge-success  " style="padding: 1% 5%;"><i class="fa fa-edit "></i></span></a>
                                        </td>

                                    </tr>
                                @endforeach
                                <tfoot>
                                <tr>
                                    <th rowspan="1 " colspan="1 ">Tên Đơn vị</th>
                                    <th rowspan="1 " colspan="1 ">Tên viết tắt</th>
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


{{-- ahihi --}}


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#id').val(data[0]);
            $('#name_unit').val(data[1]);
            $('#acronym').val(data[2]);
        });
        $(editform).on('submit', function(e) {
            e.preventDefault();
            var id = $('#id').val();
            $.ajax({
                type: "PUT",
                url: "editUnit/" + id,
                data: $('#editform').serialize(),
                success: function(response) {
                    console.log(response);
                    $('#editmodal').modal('hide');
                    location.reload();
                    alert("Cập nhật thành công");
                },
                error: function(error) {
                    alert("Không thể cập nhật");
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(addform).on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "unitadd",
                data: $('#addform').serialize(),
                success: function(response) {
                    console.log(response);
                    $('#modaladd').modal('hide');
                    location.reload();
                    alert("Thêm thành công");
                },
                error: function(error) {
                    alert("Không thể thêm");
                }
            });
        });
    });
</script>
