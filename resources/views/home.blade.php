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
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                                <i class="icon-plus3"></i>
                                            </a>
                                            <div>
                                                <div class="font-weight-semibold">New visitors</div>
                                                <span class="text-muted">2,349 avg</span>
                                            </div>
                                        </div>
                                        <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                                                <i class="icon-watch2"></i>
                                            </a>
                                            <div>
                                                <div class="font-weight-semibold">New sessions</div>
                                                <span class="text-muted">08:20 avg</span>
                                            </div>
                                        </div>
                                        <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                                <i class="icon-people"></i>
                                            </a>
                                            <div>
                                                <div class="font-weight-semibold">Total online</div>
                                                <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
                                            </div>
                                        </div>
                                        <div class="w-75 mx-auto mb-3" id="total-online"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="chart position-relative" id="traffic-sources"></div>
                        </div>
                        <!-- /traffic sources -->

                    </div>
                </div>


@endsection