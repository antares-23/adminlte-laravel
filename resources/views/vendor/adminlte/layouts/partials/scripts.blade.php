<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<!--script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script-->







<link rel='stylesheet' href=' {{asset('fullcalendar/fullcalendar.css')}}' />


<script src="{{asset('fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('fullcalendar/fullcalendar.js')}}"></script>
<script src="{{asset('fullcalendar/locale/es.js')}}"></script>






<script>
    $(function () {
    //Date picker
        $('#datepicker').datepicker({
     autoclose: true})

    })
</script>