@extends('layouts_backend._main')

@section('extra_style')

{{-- Modal --}}

<script src="{{ asset('../assets_backend/assets/css/max_cdn_bootstrap.css') }}"></script>
<link href="{{asset('../node_modules/smartwizard/dist/css/smart_wizard.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('../node_modules/smartwizard/dist/css/smart_wizard_theme_arrows.css')}}" rel="stylesheet"
    type="text/css" />


{{-- Arrow js --}}
<script src="{{ asset('../assets_backend/assets/js/max_cdn.js') }}"></script>

@endsection

@section('content')
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-grey-300 text-white header-elements-inline">
                    <h6 class="card-title">Pengajuan Revisi Kegiatan</h6>

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
                <div class="table-responsive">

                    <table class="table table-columned">
                        <thead class="bg-grey-300">
                            <tr>
                                <th>Kode MAK</th>
                                <th>Tanggal</th>
                                <th>Detil</th>
                                <th>PIC</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2018.05.01</td>
                                <td>24 Oktober 2019</td>
                                <td>Program Sarana Prasarana</td>
                                <td>Supervisor1</td>
                                <td>Pending</td>
                                <td>
                                    <div class="card">
                                        <button type="button"
                                            class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                class="icon-play4 pr-2"></i>Proses</button>
                                        <button type="button"
                                            class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"
                                            data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-screen3 pr-2"></i>Alur</button>
                                        <button type="button" data-toggle="modal" data-target="#modal_detil"
                                            class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                class="icon-comment pr-2"></i>Komentar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2019.05.03</td>
                                <td>22 Oktober 2018</td>
                                <td>Sembarang</td>
                                <td>Supervisor2</td>
                                <td>Pending</td>
                                <td>
                                    <div class="card">
                                        <button type="button"
                                            class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                class="icon-play4 pr-2"></i>Proses</button>
                                        <button type="button"
                                            class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                class="icon-screen3 pr-2"></i>Alur</button>
                                        <button type="button"
                                            class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600"><i
                                                class="icon-comment pr-2"></i>Komentar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Smart Wizard modal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- Smart Wizard HTML -->
              <div id="smartwizard">
                <ul>
                  <li><a href="#step-1">Step Title<br /><small>Step description</small></a></li>
                  <li><a href="#step-2">Step Title<br /><small>Step description</small></a></li>
                  <li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
                  <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>
                </ul>

                <div>
                  <div id="step-1" class="">
                    Step Content
                  </div>
                  <div id="step-2" class="">
                    Step Content
                  </div>
                  <div id="step-3" class="">
                    Step Content
                  </div>
                  <div id="step-4" class="">
                    Step Content
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <script src="{{asset('../node_modules/smartwizard/dist/js/jquery.smartWizard.min.js')}}"></script>

{{-- Modal script --}}
    <script type="text/javascript">
        $(document).ready(function () {

            // Step show event
            $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection,
                stepPosition) {
                //alert("You are on step "+stepNumber+" now");
                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled');
                } else if (stepPosition === 'final') {
                    $("#next-btn").addClass('disabled');
                } else {
                    $("#prev-btn").removeClass('disabled');
                    $("#next-btn").removeClass('disabled');
                }
            });

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Anjeng')
                .addClass('btn btn-info')
                .on('click', function () {
                    alert('The fuck');
                });
            var btnCancel = $('<button></button>').text('Cancel')
                .addClass('btn btn-danger')
                .on('click', function () {
                    $('#smartwizard').smartWizard("reset");
                });

            // Smart Wizard 1
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                transitionEffect: 'fade',
                showStepURLhash: false,
                keyNavigation: false,
                useURLhash: false,
                toolbarSettings: {
                    toolbarExtraButtons: [btnFinish, btnCancel]
                },
                anchorSettings:{
                    anchorClickable: false,
                    removeDoneStepOnNavigateBack: true
                }
            });

        });

    </script>

    @endsection
