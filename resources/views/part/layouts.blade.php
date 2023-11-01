<!DOCTYPE html>
<html lang="en">

<head>

    <title>Rumah Kost Thariq</title>
    @include('part.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->

        <!-- TopBar -->
        @include('part.topbar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

             @yield('content')

            <!-- End of Main Content -->

            <!-- Footer -->
            @include('part.footer')
            <!-- End of Footer -->
            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
            <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
            <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js') }}"></script>

            <!-- Template Main JS File -->
            <script src="{{ asset('landing/assets/js/main.js') }}"></script>

        <!-- End of Content Wrapper -->


    <!-- End of Page Wrapper -->

</html>
