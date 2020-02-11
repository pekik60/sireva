@extends('layouts_backend._main')

@section('content')
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Dashboard</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Support
                </a>

                <div class="breadcrumb-elements-item dropdown p-0">
                    <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear mr-2"></i>
                        Settings
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <!-- Main charts -->
    <div class="row">
        <div class="col-xl-12">

            <!-- Traffic sources -->
            <div class="card ">
                <div class="card-header header-elements-inline alert bg-grey-300 alert-dismissible">
                    <h6 class="card-title">
                        Pengajuan Revisi Kegiatan</h6>
                    <div class="header-elements">
                        <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                        </div>
                    </div>
                </div>

                <form action="{{route('pengajuan_revisi')}}" method="POST">
                    @csrf
                    <div class="card-body py-0">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-grey-300">
                                    <tr>
                                        <th>Kode MAK</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Revisi ke</th>
                                        <th>PIC</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2018.057.01</td>
                                        <td>21 Nov 2018</td>
                                        <td>Program peningkatan Sarana Prasarana</td>
                                        <td>5</td>
                                        <td>Supervisor1</td>
                                        <td>Pending</td>
                                        <td>
                                            <div class="card">
                                                <button type="button" data-toggle="modal" data-target="#modal_detil"
                                                    class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                        class="icon-eye pr-2"></i>Detil</button>
                                                <button type="button"
                                                    class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                        class="icon-screen3 pr-2"></i>Alur</button>
                                                <button type="button" data-toggle="modal" data-target="#modal_komentar"
                                                    class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                        class="icon-comment pr-2"></i>Komentar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2018.057.02</td>
                                        <td>21 Nov 2018</td>
                                        <td>Program peningkatan Sarana Prasarana</td>
                                        <td>5</td>
                                        <td>Supervisor2</td>
                                        <td>Pending</td>
                                        <td>
                                            <div class="card">
                                                <button type="button"
                                                    class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"
                                                    data-toggle="modal" data-target="#modal_detil"><i
                                                        class="icon-eye pr-2"></i>Detil</button>
                                                <button type="button"
                                                    class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                        class="icon-screen3 pr-2" data-toggle="modal" data-target=""></i>Alur</button>
                                                <button type="button"
                                                    class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600" data-toggle="modal" data-target="#modal_komentar"><i
                                                        class="icon-comment pr-2"></i>Komentar</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-3">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal Detil --}}

<div id="modal_detil" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-2" style="border-bottom:blue 1px solid">
                <h5 class="modal-title"><i class="icon-eye mr-2"></i>Detil</h5>
            </div>

            <div class="modal-body">

                <div class="row">
                    <h6 class="font-weight-semibold pl-2"><button type="button" class="btn btn-outline-primary">Info
                            Akun</button></h6>
                    <h6 class="close" data-dismiss="modal"><button type="button" data-target="#modal_komentar"
                            data-toggle="modal" class="btn btn-outline alpha-purple text-purple-800">Komentar</button>
                    </h6>
                </div>

                <div class="card">
                    <div class="card-header header-elements-inline bg-grey-300">
                        <h5 class="card-title">Info Akun</h5>
                    </div>

                    <div class="p-3">

                        <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper no-footer">

                            <div class="datatable-scroll">
                                <table class="table table-bordered table-hover datatable-highlight dataTable no-footer"
                                    id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                                    <thead class="bg-grey-300">
                                        <tr>
                                            <div class="datatable-header bg-grey-300">
                                                <div id="DataTables_Table_2_filter" class="dataTables_filter">
                                                    <label><span>Search:</span> <input type="search" class=""
                                                            aria-controls="DataTables_Table_2"></label>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Semula</th>
                                            <th>Menjadi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>057.01.01</td>
                                            <td>Sarana Prasarana</td>
                                            <td>43,504.00</td>
                                            <td>172,395,400.00</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>057.01.02</td>
                                            <td>Pengawasan Intern</td>
                                            <td>172,395,000.00</td>
                                            <td>174,395,000.00</td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross2 font-size-base mr-1"></i>
                    Close</button>
            </div>
        </div>
    </div>
</div>


{{-- Modal Komentar --}}

<div id="modal_komentar" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-2" style="border-bottom:blue 1px solid">
                <h5 class="modal-title"><i class="icon-eye mr-2"></i>Detil</h5>
            </div>

            <div class="modal-body">

                <div class="row">
                    <h6 class="pl-2" data-dismiss="modal"><button type="button" data-target="#modal_detil" data-toggle="modal" class="btn btn-outline alpha-purple text-purple-800">Info Akun</button></h6>
                    <h6 class="font-weight-semibold "><button type="button"
                            class="btn btn-outline-primary">
                            Komentar</button>
                    </h6>
                </div>

                <div class="card">
                    <div class="card-header header-elements-inline bg-grey-300">
                        <h5 class="card-title">Komentar</h5>
                    </div>

                    <div class="card-body">
                        Belum Ada Komentar
                    </div>

                    <div class="p-3">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross2 font-size-base mr-1"></i>
                    Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

