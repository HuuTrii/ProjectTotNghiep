@extends('layout.master')
@section('content_unit')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Đơn Vị
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
                    <h6 class="box-subtitle">Danh sách</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <!-- botton add -->
                            <button type="button" class="btn btn-app btn-success" data-toggle="modal" data-target="#modaladd" style="height: 30px;padding: 0;border-radius: 6px;">
                                <span style="font-size: 35px;padding: 0px;line-height: 30px;">+</span>
                            </button>
                            <a href="unit/export"><button type="button" class="btn btn-success"  style="height: 30px;padding: 0;border-radius: 6px;">
                                    <span style="font-size: 35px;padding: 0px;line-height: 30px;">&#8595;</span>
                                </button></a>
                            <!-- botton add -->
                            <form action="{{route('importUnit')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file_import" class="form-control">
                                <button class="btn btn-success">Import</button>
                            </form>
                            <!-- modal add product_type -->
                            <div class="modal fade bs-example-modal-lg" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form id="addform" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Thêm Đơn Vị</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tên đơn vị</label>
                                                    <input name="name_unit"  type="text" placeholder="Tên đơn vị" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tên đơn vị</label>
                                                    <!-- acronym  -->
                                                    <input type="text" class="form-control" name="acronym" placeholder="Viết tắt">
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
                            <!-- modal add product_type -->


                            <!-- Modal edit product_type -->
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
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
                                                    <label>Tên đơn vị</label>
                                                    <!-- acronym  -->
                                                    <input type="text" class="form-control" name="name_unit" id="name_unit" placeholder="Tên đơn vị">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tên đơn vị</label>
                                                    <!-- acronym  -->
                                                    <input type="text" class="form-control" name="acronym" id="acronym" placeholder="Viết tắt">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Updated</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- modal edit product_type -->
                            <table id="data_product_type" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 10%;">STT</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 60%;">Tên đơn vị</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 30%;">Tương tác</th>
                                </tr>
                                @foreach($unit as $unit1)
                                    <tr role="row " class="odd ">
                                        <td>{{$unit1->id_unit}}</td>
                                        <td>{{$unit1->name_unit}}</td>
                                        <td>
                                            <a href=" {{ route('unitDestroy', $unit1->id_unit )}}">  <span class="badge badge-danger" style="padding: 1% 5%;"><i class="fa fa-trash"></i></span></a>
                                            <a href="#" class="editbtn"> <span  class="badge badge-success  " style="padding: 1% 5%;"><i class="fa fa-edit "></i></span></a>
                                        </td>

                                    </tr>
                                @endforeach
                                <tfoot>
                                <tr>
                                    <th rowspan="1 " colspan="1 ">Tên đơn vị</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 200x;">Tương tác</th>

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
            $('#data_unit').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{asset('datatable/list')}}',
                columns: [
                    // { data: 'id_unit', name: 'id_unit' },
                    // { data: 'name_unit', name: 'name_unit' },


                ]

            });
        });
    </script>
@endpush




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
            $('#name_unit').val(data[1]);
        });
        $(editform).on('submit',function (e) {
            e.preventDefault();
            var id = $('#id').val();
            $.ajax({
                type:"PUT",
                url:"editUnit/"+ id,
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
                url:"unitadd",
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
