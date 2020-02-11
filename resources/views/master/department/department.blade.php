@extends('layouts_backend._main')

@section('content')
            <div class="page-header page-header-light">
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Master</span>
                            <span class="breadcrumb-item active">User</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
            </div>
            <!-- /page header -->
            <!-- Content area -->
            <div class="content">
                <div class="mb-3">
                    <h6 class="mb-0 font-weight-semibold">
                        Master User
                    </h6>
                    <span class="text-muted d-block">Menambah data kategori pada news</span>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card border-teal-400">
                            <div class="card-header bg-teal-400 text-white header-elements-inline">
                                <h6 class="card-title">List User</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <button class="list-icons-item btn btn-sm btn-info add_button pt-7" data-toggle="modal" data-target="#modal"><i class="fas fa-plus-circle"></i> Tambah</button>
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table_datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /dashboard content -->

            </div>
            <!-- /content area -->
            <form class="form-save">
               <div id="modal" class="modal fade" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header bg-teal-300">
                           <h5 class="modal-title">Form Data</h5>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                          <div class="card-body">
                            <form action="#">
                              <div class="row">
                                <div class="col-md-12">
                                  <fieldset>

                                    {{-- hidden--}}
                                    <input type="hidden" class="form-control md_id" name="md_id">

                                    <div class="form-group">
                                      <label>Nama:</label>
                                      <input type="text" class="form-control md_name" name="md_name" placeholder="Nama">
                                    </div>
                                  </fieldset>
                                </div>
                              </div>
                            </form>
                          </div>

                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-link text-primary" data-dismiss="modal">Close</button>
                           <div class="btn_replace">
                           </div>
                           {{-- <button type="button" class="btn bg-teal-600">Save changes</button> --}}
                        </div>
                     </div>
                  </div>
               </div>
            </form>

            
@endsection

@section('extra_script')
<script type="text/javascript">
    var table = $('.table_datatable');
  $(document).ready(function() {
    table.DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url:'{{ route('department_datatable') }}',
          error:function(){
            table.DataTable().ajax.reload();
          }
      },
      columns: [
        // HIDDEN DATA
        {data: 'md_id', name: 'md_id',class:'id_td'},
        // SHOWING DATA
        {data: 'md_name', name: 'md_name',class:'name_td'},
        ],
      columnDefs:[{
         targets: 2, 
         defaultContent : "<button type='button' class='btn btn-info rounded-round edit_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-pen fa-lg'></i></button> <button type='button' class='btn btn-danger rounded-round mr-2 delete_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-trash'></i></button>"
        },]
    });

      $('.table_datatable tbody').on( 'click', '.edit_button', function () {
          var parent   = $(this).closest("tr");
          var data     = table.DataTable().row(parent).data();
          $('.md_id').val(data['md_id']);
          $('.md_name').val(data['md_name']);
          $('.btn_replace').html('<button type="button" class="btn bg-teal-600" onclick="update()">Update changes</button>');
          $('#modal').modal('show');
      });

      $('.table_datatable tbody').on( 'click', '.delete_button', function () {
          var parent   = $(this).closest("tr");
          var data = table.DataTable().row(parent).data();
          $.ajax({
              url:"{{ route('department_delete') }}",
              data: {'id':data['md_id']},
              success:function(data){
                if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    table.DataTable().ajax.reload();
                    iziToast.error({position: 'topRight',title: 'Data Telah Terhapus'});
                }
              }
          });
      });

    });

    $('.add_button').click(function(){
        $('.remove_value').val('');
        $('.btn_replace').html('<button type="button" onclick="save()" class="btn bg-teal-600">Save changes</button>');
    })

    function save(argument) {
         $.ajax({
            type: "get",
            url:"{{ route('department_save') }}",
            data: $('.form-save').serialize(),
            success:function(data){
              if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    table.DataTable().ajax.reload();
                    iziToast.success({position: 'topRight',title: 'Data Telah Tersimpan'});
              }
            }
        });
    }
    function update(argument) {
         $.ajax({
            type: "get",
            url:"{{ route('department_update') }}",
            data: $('.form-save').serialize(),
            success:function(data){
              if (data.status == 'sukses') {
                    $('#modal').modal('hide');
                    table.DataTable().ajax.reload();
                    iziToast.success({position: 'topRight',title: 'Data Telah Diperbarui'});
              }
            }
        });
    }
  $('.dropify').dropify();
</script>
@endsection