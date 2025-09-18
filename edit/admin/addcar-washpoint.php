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


    <!--Custom css-->
    <link rel="stylesheet" href="../assets/custom.css">


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

    <!--/content-inner-->
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
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--heder end here-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../admin/admin-dashboard.php">Home</a><i class="fa fa-angle-right"></i>Add Washing Point </li>
        </ol>
        <!--grid-->
        <div class="grid-form">

            <!---->
            <div class="grid-form1">
                <h3>Add Washing Point</h3>

                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <form class="form-horizontal" name="washingpoint" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Car Wash Point Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="washingpointname" id="washingpointname" placeholder="Washing Point Name" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Adress</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="address" id="address" placeholder="Address" required="" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="contactno" id="contactno" placeholder="Contact Number" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" name="submit" class="btn-primary btn">Add</button>

                                    <button type="reset" class="btn-inverse btn">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>