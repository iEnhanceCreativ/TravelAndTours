@extends('layouts/app' )

@section('layoutContent')

    <!-- Layout page -->
    <div class="container-fluid position-relative p-0">
        <!-- BEGIN: Navbar-->
        @include('layouts/sections/navbar/navbar')
        <!-- END: Navbar-->

    </div>

    @yield('content')

    <!-- Footer -->
    @include('layouts/sections/footer/footer')
    
    <!-- / Layout wrapper -->
<script>
var APP_URL = "{{ env('APP_URL') }}";
</script>
@endsection