@extends('layouts_backend._main')

@section('content')
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Master</span>
                <span class="breadcrumb-item active">Kategori news</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-xl-12">
            <div class="card border-teal-400">
                <div class="card-header bg-grey-300 text-white header-elements-inline">
                    <h6 class="card-title">Arsip Data Revisi</h6>

                    <table class="table-columned">
                        <thead>
                            <tr>
                                <th>
                                    <div class="btn-group justify-content-center">
                                        <div class="col-lg-10">
                                            <select class="form-control">
                                                <option value="">aa</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="btn-group justify-content-center">
                                        <div class="col-lg-10">
                                            <select class="form-control ">
                                                <option value="">satu</option>
                                                <option value="">dua</option>
                                                <option value="">tiga</option>
                                                <option value="">empat</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="card-body">
                    <table class="table table_datatable">
                        <thead>
                            <tr>
                                <th>Kode Satker</th>
                                <th>Nama Satker</th>
                                <th>Revisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>690218</td>
                                <td>PERPUS Proklamator Bung Hatta</td>
                                <td>0</td>
                                <td>
                                    <button onclick="location.href='{{route('detil')}}'" type="button"
                                        class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                            class="icon-eye pr-2"></i>Detil</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<form class="form-save">
    <div id="modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-teal-300">
                    <h5 class="modal-title">Form Data</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="cn_id" class="cn_id">


                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Nama</label>
                                <input type="text" name="cn_name" placeholder="nama kategori"
                                    class="form-control remove_value cn_name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Ikon</label>
                                <input type="text" name="cn_icon" placeholder="ikon kategori"
                                    class="form-control remove_value cn_icon">
                            </div>
                        </div>
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

@endsection
