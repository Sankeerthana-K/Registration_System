
<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Divisional Secreatriat Manmunaipattu
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Suthan</a>.</strong> All rights reserved.
</footer>

<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


{{--Chart--}}
<script src="/js/Chart.min.js" charset=utf-8></script>

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->



<!-- My Import JS -->
<script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/bower_components/moment/min/moment.min.js"></script>
<script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


<script src="/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/plugins/input-mask/jquery.inputmask.js"></script>

<script src="/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="/js/toastr.js"></script>


<script src="/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/buttons.print.min.js"></script>

<script src="/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" language="javascript" src="/js/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/vfs_fonts.js"></script>
<script src="/js/sweetalert.js"></script>
<script>

    $('#sidebarToggle').on('click', function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ url('savestate') }}"
        });
    });
</script>


@yield('script')


</body>
</html>