
<!DOCTYPE html>
<html lang="en">
    @include('layouts.head.head')
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">MZ Aguas</a></h1>
</div>
<!--close-Header-part-->

@include('layouts.header.header')
@include('layouts.sidebar.sidebar')


<div id="content">

      @yield('content')

</div>
<!--Footer-part-->
<div class="row-fluid">
    <div id="footer" class="span12"> 2017 &copy; MZ Aguas. By <a href="edsonchivambo@gmail.com">Edson Chivambo</a> </div>
</div>
<!--end-Footer-part-->
<!-- Scripts -->
<script src="{{ asset('matrixAdmin/js/matrix.form_common.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/jquery.min.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/masked.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/jquery.uniform.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/select2.min.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/matrix.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/wysihtml5-0.3.0.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/jquery.peity.min.js') }}"></script>
<script src="{{ asset('matrixAdmin/js/bootstrap-wysihtml5.js') }}"></script>
<script>
    $('.textarea_editor').wysihtml5();
</script>
</body>
</html>
