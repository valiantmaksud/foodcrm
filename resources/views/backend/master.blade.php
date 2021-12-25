@include('backend._partials.header')

<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('backend._partials.sidebar')
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer print-none">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                            Copyright © {{ date('Y') }}
                        </span>

                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->


    <script src="{{ asset('/backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('/backend/assets/vendors/js/vendor.bundle.addons.js') }}"></script>

    <script>
        jQuery(function($) {
            var path = window.location.href;

            path = path.replace('#', '')

            let selector = "a[href='" + path + "']"
            let a_tag = $(selector)

            let li_tag = a_tag.closest('li')
            li_tag.addClass('active')

            let inc = 1;


            while ($(li_tag).parent().parent().length > 0) {


                li_tag = $(li_tag).parent().parent()
                $(li_tag).addClass('open')


                if ($(li_tag).parent().parent().length == 0 || inc > 10) {
                    break;
                }

                inc++;

            }

        });
    </script>




    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('/backend/assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/shared/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('/backend/assets/js/demo_1/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('/backend/assets/js/shared/jquery.cookie.js') }}" type="text/javascript"></script>



</body>

</html>
