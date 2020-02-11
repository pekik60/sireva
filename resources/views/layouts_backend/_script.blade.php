{{-- <script src="{{ asset('../assets_backend/js/main/jquery.min.js') }}"></script> --}}
<script src="{{ asset('../assets_backend/js/main/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('../assets_backend/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/ui/moment/moment.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/pickers/daterangepicker.js') }}"></script>

<script src="{{ asset('../assets_backend/assets/js/app.js') }}"></script>
<script src="{{ asset('../assets_backend/js/demo_pages/dashboard.js') }}"></script>

<script src="{{ asset('../assets_backend/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/forms/selects/select2.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/demo_pages/datatables_basic.js') }}"></script>


<script src="{{ asset('../node_modules/izitoast/dist/js/iziToast.js') }}"></script>
<script src="{{ asset('../node_modules/highcharts/highcharts.js') }}"></script>
<script src="{{ asset('../node_modules/smartwizard/dist/css/smart_wizard_theme_arrow.css') }}"></script>


<script src="{{ asset('../assets_backend/js/plugins/forms/styling/uniform.min.js') }}"></script>

<script src="{{ asset('../assets_backend/js/demo_pages/form_layouts.js') }}"></script>

<script src="{{ asset('../assets_backend/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/forms/selects/select2.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/forms/styling/uniform.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/forms/inputs/inputmask.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/forms/validation/validate.min.js') }}"></script>
<script src="{{ asset('../assets_backend/js/plugins/extensions/cookie.js') }}"></script>

<script src="{{ asset('../assets_backend/js/demo_pages/form_wizard.js') }}"></script>
<script src="{{ asset('../node_modules/froala-editor/js/froala_editor.pkgd.min.js') }}"></script>
<script src="{{ asset('../node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('../node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.id.min.js') }}"></script>

<script src="{{ asset('../node_modules/dropify/dist/js/dropify.js') }}"></script>
<script type="text/javascript">
	var baseUrl = '{{ url('/') }}';
	$(document).ready(function() {
	  clockUpdate();
	  setInterval(clockUpdate, 1000);
	})

	function clockUpdate() {
	  var date = new Date();
	  function addZero(x) {
	    if (x < 10) {
	      return x = '0' + x;
	    } else {
	      return x;
	    }
	  }

	  function twelveHour(x) {
	    if (x > 12) {
	      return x = x - 12;
	    } else if (x == 0) {
	      return x = 12;
	    } else {
	      return x;
	    }
	  }

	  var h = addZero(twelveHour(date.getHours()));
	  var m = addZero(date.getMinutes());
	  var s = addZero(date.getSeconds());

	  $('.digital-clock').text(h + ':' + m + ':' + s)
	}
</script>


