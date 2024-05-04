<!DOCTYPE html>
<html lang="en">

@include('front.components.head')

<body>
    <!-- Navbar Start -->
    @include('front.components.nav')
    <!-- Navbar End -->


    <!-- Facilities Start -->
    @yield('content')
    <!-- Footer Start -->
    @include('front.components.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('front.components.scripts')
</body>

</html>
