<!DOCTYPE html>
<html lang="en">

<head>

    <title>Rumah Kost Thariq</title>
    @include('part.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- TopBar -->
        @include('part.topbar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->

            <div id="content">

                @yield('content')

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('part.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
</body>

</html>
