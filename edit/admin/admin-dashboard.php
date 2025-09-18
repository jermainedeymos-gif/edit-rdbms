


<!DOCTYPE HTML>
<html>

<head>
    <title>CWMS | Admin Dashboard</title>
    <!-- admin-dashboard/css-->
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/font-awesome.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/icon-font.min.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/morris.css">
    <link rel="stylesheet" href="http://192.168.80.168/cwms/admin/css/style.css">

    <!-- Correct order for JS files -->
    <script src="http://192.168.80.168/cwms/admin/js/jquery-2.1.4.min.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/bootstrap.min.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/jquery.nicescroll.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/scripts.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/raphael-min.js"></script>
    <script src="http://192.168.80.168/cwms/admin/js/morris.js"></script>


    <!--Bootstrap 3 CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <!-- fonts.googleapis.com-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400">

    <!-- assets/css-->
    <link rel="stylesheet" href="http://192.168.80.168/cwms/css/style.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
</head>

<body>
    <div class="page-container">

        <!--/sidebar-menu-->
        <div class="sidebar-menu">
            <header class="logo1">
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
            </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
                <ul id="menu">
                    <li><a href="./admin-dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
                            <div class="clearfix"></div>
                        </a></li>

                    <li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Washing Points</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="addcar-washpoint.php">Add</a></li>
                            <li id="menu-academico-avaliacoes"><a href="managecar-washingpoints.php">Manage</a></li>
                        </ul>
                    </li>

                    <li><a href="add-booking.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Add Car Wash Booking</span>
                            <div class="clearfix"></div>
                        </a></li>


                    <li id="menu-academico"><a href="#"><i class="fa fa-files-o" aria-hidden="true"></i><span>Car Washing Booking</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="new-booking.php">New</a></li>
                            <li id="menu-academico-avaliacoes"><a href="completed-booking.php">Completed</a></li>
                            <li id="menu-academico-avaliacoes"><a href="all-bookings.php">All</a></li>
                        </ul>
                    </li>



                    <li><a href="manage-enquires.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Manage Enquiries</span>
                            <div class="clearfix"></div>
                        </a></li>
                    <li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="about.php">About</a></li>
                            <li id="menu-academico-avaliacoes"><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main">
                <div class="logo-w3-agile">
                    <h1><a href="dashboard.php">Car Wash Management System</a></h1>
                </div>


                <div class="profile_details w3l">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="https://thumbs.dreamstime.com/b/car-wash-cartoon-logo-man-using-car-wash-apron-car-wash-cartoon-logo-man-using-car-wash-apron-character-design-vector-124032278.jpg" alt=""> </span>
                                    <div class="user-name">
                                        <p>Welcome</p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down"></i>
                                    <i class="fa fa-angle-up"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-lock"></i> Setting</a> </li>
                                <li> <a href="../views/index.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"> </div>
            </div><!--header end here-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin/admin-dashboard.php">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>

            <!--four-grids here-->
            <div class="inner-block">
                <div class="four-grids">

                    <a href="all-bookings.php">
                        <div class="col-md-3 four-grid">
                            <div class="four-agileits">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>Total Bookings</h3>

                                    <h4> 13 </h4>


                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="new-booking.php">
                        <div class="col-md-3 four-grid">
                            <div class="four-agileinfo">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>New Bookings</h3>
                                    <h4>6</h4>

                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="completed-booking.php">
                        <div class="col-md-3 four-grid">
                            <div class="four-wthree">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>Completed Bookings</h3>
                                    <h4>7</h4>

                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="manage-enquires.php">
                        <div class="col-md-3 four-grid">
                            <div class="four-w3ls">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
                                </div>
                                <div class="four-text">
                                    <h3>Enquiries</h3>
                                    <h4>8</h4>

                                </div>

                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                    <div class="four-grids">
                        <a href="managecar-washingpoints.php">
                            <div class="col-md-3 four-grid">
                                <div class="four-w3ls">
                                    <div class="icon">
                                        <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
                                    </div>
                                    <div class="four-text">
                                        <h3>Washing Points</h3>
                                        <h4>6</h4>

                                    </div>

                                </div>
                            </div>
                        </a>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class="copyrights">
                <p>© 2025 CWMS. All Rights Reserved | <a href="#">CWMS</a> </p>
            </div>
        </div>
    </div>

    <script>
        var toggle = true;

        $(".sidebar-icon").click(function() {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                    $("#menu span").css({
                        "position": "relative"
                    });
                }, 400);
            }

            toggle = !toggle;
        });
    </script>
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- /Bootstrap Core JavaScript -->
    <!-- morris JavaScript -->
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                        period: '2014 Q1',
                        iphone: 2668,
                        ipad: null,
                        itouch: 2649
                    },
                    {
                        period: '2014 Q2',
                        iphone: 15780,
                        ipad: 13799,
                        itouch: 12051
                    },
                    {
                        period: '2014 Q3',
                        iphone: 12920,
                        ipad: 10975,
                        itouch: 9910
                    },
                    {
                        period: '2014 Q4',
                        iphone: 8770,
                        ipad: 6600,
                        itouch: 6695
                    },
                    {
                        period: '2015 Q1',
                        iphone: 10820,
                        ipad: 10924,
                        itouch: 12300
                    },
                    {
                        period: '2015 Q2',
                        iphone: 9680,
                        ipad: 9010,
                        itouch: 7891
                    },
                    {
                        period: '2015 Q3',
                        iphone: 4830,
                        ipad: 3805,
                        itouch: 1598
                    },
                    {
                        period: '2015 Q4',
                        iphone: 15083,
                        ipad: 8977,
                        itouch: 5185
                    },
                    {
                        period: '2016 Q1',
                        iphone: 10697,
                        ipad: 4470,
                        itouch: 2038
                    },
                    {
                        period: '2016 Q2',
                        iphone: 8442,
                        ipad: 5723,
                        itouch: 1801
                    }
                ],
                lineColors: ['#ff4a43', '#a2d200', '#22beef'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
</body>

</html>