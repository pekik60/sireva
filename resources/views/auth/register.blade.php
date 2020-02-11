@extends('layouts_frontend._main')

@section('extra_style')
@endsection
@section('content')
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Daftar</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<div class="mag-login-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="login-content bg-white p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Selamat Bergabung</h5>
                    </div>

                    <form class="form_save">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="m_name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="m_username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" name="m_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="m_password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" name="m_password_retype" placeholder="Ulang Password">
                        </div>
                        <button type="button" class="btn mag-btn mt-30" onclick="save()">Daftar</button>
                        <br>
                        <span>Sudah punya ? <a href="{{ route('index_login') }}">Login Disini</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_scripts')
<script type="text/javascript">
    function save(argument) {
        $.ajax({
            type: "get",
            url:'{{ route('register') }}',
            data: $('.form_save').serialize(),
            success:function(data){
                if (data.status == 'sukses') {
                    iziToast.success({position: 'topRight',title: 'Pendaftaran Berhasil'});
                    window.location.assign('{{ route('index_login') }}')
                }else{
                    iziToast.error({position: 'topRight',title: 'Password Tidak sama'});
                }
            }
        });
    }
</script>
@endsection