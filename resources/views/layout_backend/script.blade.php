<!-- js -->
<script src="{{ asset('backend/vendors/scripts/core.js') }}"></script>
<script src="{{ asset('backend/vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('backend/vendors/scripts/process.js') }}"></script>
<script src="{{ asset('backend/vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('backend/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/vendors/scripts/dashboard.js') }}"></script>

<script src="{{asset('bootstrap/dist/js/bootstrap-datepicker.js')}}"></script>


<script type="text/javascript">
    $('#tahun_masuk').datepicker({
        format:"yyyy",
        viewMode:"years",
        minViewMode: "years",
        autoclose:true
    });$('#tahun_selesai').datepicker({
        format:"yyyy",
        viewMode:"years",
        minViewMode: "years",
        autoclose:true
    })
</script>
