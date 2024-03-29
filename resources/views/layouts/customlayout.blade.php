<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from trustbund.com/user/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 18:22:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Register New Account </title>
    <meta name="theme-color" content="#222437">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css') }}">
    <!-- End Plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_3/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../images/logo.png" />
    <script src="../../kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="{{ asset('style.html') }}">
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
 <script src="//code.tidio.co/hp4lim95ncjumkqcqfnlsk2vcopicghj.js" async></script>


    <style>
        * {
            box-sizing: border-box;
            /* background: grey */
        }

        #google_translate_element {
            z-index: 9999999;
            position: fixed;
            bottom: 25px;
            left: 15px;
        }

        .goog-te-gadget {
            font-family: Roboto, "Open Sans", sans-serif !important;
            text-transform: uppercase;
        }

        .goog-te-gadget-simple {
            background-color: rgba(0, 0, 0, 0.5) !important;
            border: 1px solid rgba(255, 255, 255, 0.5) !important;
            padding: 3px !important;
            border-radius: 4px !important;
            font-size: 0.8rem !important;
            line-height: 2rem !important;
            display: inline-block;
            cursor: pointer;
            zoom: 1;
            margin-bottom: 4px;
        }

        .goog-te-menu2 {
            max-width: 100%;
        }

        .goog-te-menu-value {
            color: #fff !important;
        }

        .goog-te-menu-value:before {
            font-family: 'Material Icons';
            content: "\E927";
            margin-right: 16px;
            font-size: 2rem;
            vertical-align: -10px;
        }

        .goog-te-menu-value span:nth-child(5) {
            display: none;
        }

        .goog-te-menu-value span:nth-child(3) {
            border: none !important;
            font-family: 'Material Icons';
        }

        .goog-te-menu-value span:nth-child(3):after {
            font-family: 'Material Icons';
            content: "\E5C5";
            font-size: 1.5rem;
            vertical-align: -6px;
        }

        .goog-te-gadget-icon {
            background-position: 0px 0px;
            height: 32px !important;
            width: 32px !important;
            margin-right: 8px !important;
            display: none;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }


        body {
            top: 0px !important;
        }

        /* ================================== *\
    Mediaqueries
\* ================================== */
        @media (max-width: 667px) {
            #google_translate_element {}

            #google_translate_element goog-te-gadget {}

            #google_translate_element .skiptranslate {}

            #google_translate_element .goog-te-gadget-simple {
                text-align: center;
            }
        }
    </style>


    <style>
        .bg-1 {
            background-image: url(../img/bg-2.html);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 50% 50%;
        }
    </style>
</head>

<body class="dark-theme">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">


            @yield('body')




        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript"
        src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>


    <script>
        // WORK IN PROGRESS BELOW

        $('document').ready(function() {


            // RESTYLE THE DROPDOWN MENU
            $('#google_translate_element').on("click", function() {

                // Change font family and color
                $("iframe").contents().find(
                        ".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *"
                    )
                    .css({
                        'color': '#544F4B',
                        'font-family': 'Roboto',
                        'width': '100%'
                    });
                // Change menu's padding
                $("iframe").contents().find('.goog-te-menu2-item-selected').css('display', 'none');

                // Change menu's padding
                $("iframe").contents().find('.goog-te-menu2').css('padding', '0px');

                // Change the padding of the languages
                $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');

                // Change the width of the languages
                $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
                $("iframe").contents().find('td').css('width', '100%');

                // Change hover effects
                $("iframe").contents().find(".goog-te-menu2-item div").hover(function() {
                    $(this).css('background-color', '#4385F5').find('span.text').css('color',
                        'white');
                }, function() {
                    $(this).css('background-color', 'white').find('span.text').css('color',
                        '#544F4B');
                });

                // Change Google's default blue border
                $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

                // Change the iframe's box shadow
                $(".goog-te-menu-frame").css('box-shadow',
                    '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)'
                );



                // Change the iframe's size and position?
                $(".goog-te-menu-frame").css({
                    'height': '100%',
                    'width': '100%',
                    'top': '0px'
                });
                // Change iframes's size
                $("iframe").contents().find('.goog-te-menu2').css({
                    'height': '100%',
                    'overflow': 'scroll',
                    'width': '100%'
                });
            });
        });
    </script>




    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/justgage/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/justgage/justgage.js') }}"></script>
    <!-- End plugin js for this page -->

    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <!-- inject:js -->
    <script src="{{ asset('assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/shared/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/shared/misc.js') }}"></script>
    <script src="{{ asset('assets/js/shared/settings.js') }}"></script>
    <script src="{{ asset('assets/js/shared/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/demo_1/dashboard.js') }}"></script>

    <script src="{{ asset('assets/js/shared/data-table.js') }}"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/js/fontawesome.js"></script>
    <script>
        $(function() {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#datatable2').DataTable({
                bLengthChange: false,
                searching: false,
                responsive: true
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });

        function hide_element(x) {
            document.querySelector(x).style.display = 'none';
        }

        function show_element(x) {
            document.querySelector(x).style.display = 'block';
        }

        function get_options(y, val, x) {
            show_element('#loader');
            $.ajax({
                type: "POST",
                url: 'includes/ajax.php',
                data: y + '=' + val,
                success: function(data) {
                    $(x).html(data);
                    hide_element('#loader');
                }
            });
        }

        function get_options_and_hide(y, val, x, hide_it) {
            show_element('#loader');
            var my_ele = document.querySelector(hide_it);
            if (my_ele) {
                hide_element(hide_it);
            }
            $.ajax({
                type: "POST",
                url: 'includes/ajax.php',
                data: y + '=' + val,
                success: function(data) {
                    $(x).html(data);
                    hide_element('#loader');
                }
            });
        }

        function copy_ref(data, btn) {
            var copyText = document.getElementById(data);
            copyText.select();
            document.execCommand("copy");
            $(btn).addClass('btn-success');
            $(btn).html('<i class="fa fa-copy"></i> Copied');

        }
    </script>

 <script src="//code.tidio.co/hp4lim95ncjumkqcqfnlsk2vcopicghj.js" async></script>
</body>

</html>
