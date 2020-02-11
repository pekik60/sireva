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
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">
                        <i class="fas fa-book"></i>
                        Form Upload Data Pendukung</h6>
                    <div class="header-elements">
                        <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                            <button class="btn btn-dark">
                                Selanjutnya
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body py-0">
                    <fieldset class="mb-3">
                        <form action="{{route('proses_baru')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label col-lg-2">Jenis File <label
                                        style="color:red">*</label><label style="color: red"></label></label>
                                <div class="col-lg-10">
                                    <select class="form-control">
                                        <option value="" selected="">Surat usulan</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-lg-2">Keterangan <label
                                        style="color:red">*</label></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-lg-2">File Repository <label
                                        style="color:red">*</label></label>
                                <div class="col-lg-10">
                                    <div class="uniform-uploader">
                                        <input type="file" class="form-control-uniform" required="required"
                                            data-fouc=""><span class="filename" style="user-select: none;">No file
                                            selected</span><span class="action btn btn-light"
                                            style="user-select: none;">Choose File</span></div>
                                </div>
                            </div>
                            <button class="form-group btn bg-grey-300">Save</button>
                        </form>
                    </fieldset>
                </div>
            </div>

                <div class="card">


                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-grey-300">
                                <tr>
                                    <th>
                                        File
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-columned">
                            <thead class="bg-grey-300">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Upload</th>
                                    <th>Jenis File</th>
                                    <th>Nama</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>24 Oktober 2019</td>
                                    <td>pdf.</td>
                                    <td>Keterangan</td>
                                    <td>File</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>22 Oktober 2018</td>
                                    <td>xls.</td>
                                    <td>Keterangan</td>
                                    <td>File</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
