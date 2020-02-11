<script type="text/javascript" src="{{ asset('../assets_frontend/js/jquery/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../assets_frontend/js/bootstrap/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../assets_frontend/js/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../assets_frontend/js/plugins/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('../assets_frontend/js/active.js') }}"></script>
<script type="text/javascript" src="{{ asset('../node_modules/izitoast/dist/js/iziToast.js') }}"></script>
<script type="text/javascript" src="{{ asset('../node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('../node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js') }}"></script>
<script type="text/javascript">
		
	var baseUrl = '{{ url('/') }}';
    var cek_akses = '{{ Auth::user() }}';
	$( document ).ready(function() {
		$('li').removeClass('has-down');
	});

	$('.datepicker').datepicker({
      format: 'dd-MM-yyyy',
      autoclose:true,
      language:'id',
    });

    
</script>
