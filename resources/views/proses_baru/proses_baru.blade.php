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

                <form action="{{route('proses_pengajuan_revisi')}}" method="POST">
                    <div class="card-body py-0">
                        <fieldset class="mb-3">
                            <form action="#" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label col-lg-2">Tahun <label
                                            style="color:red">*</label><label style="color: red"></label></label>
                                    <div class="col-lg-10">
                                        <select class="form-control">
                                            <optgroup label="1990">
                                            <optgroup label="2000">
                                                <option value="AK">2000</option>
                                                <option value="AK">2001</option>
                                                <option value="AK">2002</option>
                                                <option value="AK">2003</option>
                                                <option value="AK">2004</option>
                                                <option value="AK">2005</option>
                                                <option value="AK">2006</option>
                                                <option value="AK">2007</option>
                                                <option value="AK">2008</option>
                                                <option value="AK">2009</option>
                                                <option value="AK">2010</option>
                                                <option value="AK">2011</option>
                                                <option value="AK">2012</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label col-lg-2">Program <label
                                            style="color:red">*</label><label style="color: red"></label></label>
                                    <div class="col-lg-10">
                                        <select class="form-control">
                                            <option value="AK">01</option>
                                            <option value="AK">02</option>
                                            <option value="AK">03</option>
                                            <option value="AK">04</option>
                                            <option value="AK">05</option>
                                            <option value="AK">06</option>
                                            <option value="AK">07</option>
                                            <option value="AK">08</option>
                                            <option value="AK">09</option>
                                            <option value="AK">10</option>
                                            <option value="AK">11</option>
                                            <option value="AK">12</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <button class="btn bg-grey-300">Proses</button>
                            </form>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
