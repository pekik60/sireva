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
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{-- <table class="table table-bordered">
                                                <thead class="bg-grey-300">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Eugene</td>
                                                        <td>Kopyov</td>
                                                        <td>@Kopyov</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Victoria</td>
                                                        <td>Baker</td>
                                                        <td>@Vicky</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>James</td>
                                                        <td>Alexander</td>
                                                        <td>@Alex</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Franklin</td>
                                                        <td>Morrison</td>
                                                        <td>@Frank</td>
                                                    </tr>
                                                </tbody>

                                            </table> --}}
                                        </td>
                                        <td>
                                            {{-- <table class="table table-bordered">
                                                <thead class="bg-grey-300">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Eugene</td>
                                                        <td>Kopyov</td>
                                                        <td>@Kopyov</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Victoria</td>
                                                        <td>Baker</td>
                                                        <td>@Vicky</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>James</td>
                                                        <td>Alexander</td>
                                                        <td>@Alex</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Franklin</td>
                                                        <td>Morrison</td>
                                                        <td>@Frank</td>
                                                    </tr>
                                                </tbody>

                                            </table> --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>
                        <div class="pt-3 pb-3">
                            <button class="btn bg-grey-300">
                                Ajukan Revisi
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
