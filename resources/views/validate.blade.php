{{-- @if ($errors -> any('sweet_alert.alert'))
<script>
  swal({!! $errors -> any('sweet_alert.alert') !!});
</script>
@endif --}}




@if($errors -> any())
    <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button> </p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button> </p>
@endif


{{--
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    @if (session('alert'))
        swal("{{ session('alert') }}");
    @endif
    </script> --}}


{{-- @if (Session::has('sweet_alert.success'))
<script>
  swal({!! Session::get('sweet_alert.success') !!});
</script>
@endif --}}
