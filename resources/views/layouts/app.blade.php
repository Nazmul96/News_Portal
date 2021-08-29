<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">
        <!-- sweet-alert and Toaster -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/plugins/toastr/toastr.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/plugins/sweetalert/sweetalert.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('public/backend/plugins/summernote/summernote-bs4.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    @guest

    @else
    <!-- Navbar -->
    @include('layouts.admin_partial.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.admin_partial.sidebar')
    <!-- Main Sidebar Container -->
    @endguest
  <!-- Content Wrapper. Contains page content -->
  
    
   @yield('content')
 
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('public/backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('public/backend/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend/dist/js/pages/dashboard2.js')}}"></script>


<!-- sweet alert and toaster js file -->
<script type="text/javascript" src="{{ asset('public/backend/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('public/backend/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('public/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Tags input  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>

<!-- Summernote -->
<script src="{{ asset('public/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<!-- datatable javascript code -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<!-- Toaster alert and Sweet alert code -->
<script>
  @if(Session::has('messege'))
       var type="{{Session::get('alert-type','info')}}"
       switch(type){
           case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
           case 'success':
               toastr.success("{{ Session::get('messege') }}");
               break;
           case 'warning':
              toastr.warning("{{ Session::get('messege') }}");
               break;
           case 'error':
               toastr.error("{{ Session::get('messege') }}");
               break;
       }
     @endif
</script>

<!-- sweet alert before logout -->
<script>
  $(document).on("click","#logout",function(e){
    e.preventDefault();
    var link=$(this).attr("href");
    swal({
        title: "Are you want to logout?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
                window.location.href=link;
          }
         else {
          swal("Not Logout!");
        }
      });
  })
</script>
<!-- sweet alert before delete -->
<script>
  $(document).on("click","#delete",function(e){
    e.preventDefault();
    var link=$(this).attr("href");
    swal({
        title: "Are you want to Delete?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
                window.location.href=link;
          }
         else {
          swal("Save Data!");
        }
      });
  })
</script>

</body>
</html>
