<?php
    require_once '../../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Monsterlite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Monster Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/time/bootstrap-clockpicker.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.jpg" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                        <div style="color: white; margin-left: 20px; margin-top: 5px"> 
                                <h4>Welcome Admin</h4>
                            </div>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="../../index.php" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="doctors-page.php" aria-expanded="false">
                                <i class="mr-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Doctors</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-basic.php" aria-expanded="false"><i class="mr-3 fa fa-table"
                                    aria-hidden="true"></i><span class="hide-menu">Patient list</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-blank.php" aria-expanded="false"><i class="mr-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu">Schedule</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="appointment-page.php" aria-expanded="false"><i class="mr-3 fas fa-address-book"
                                    aria-hidden="true"></i><span class="hide-menu">Appointment</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="checkup-page.php" aria-expanded="false"><i class="mr-3 fas fa-calendar-plus"
                                    aria-hidden="true"></i><span class="hide-menu">Check Up</span></a></li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../../index.php"
                                class="btn btn-danger text-white mt-4" target="_blank"><i class="mr-3 fas fa-power-off"
                                aria-hidden="true"></i>Log out
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Schedule</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-right upgrade-btn">
                            <a onClick="window.location.reload();"
                                class="btn btn-success d-none d-md-inline-block text-white"><i class="mr-3 fas fa-sync"></i>Refresh
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Schedule</h4>
                                <div class="bootstrap-iso">
                                    <div class="container-fluid">
                                     <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                       <form action="../../includes/schedule.inc.php" class="form-horizontal" method="post">
                                        <div class="form-group form-group-lg">
                                            <label class="control-label col-sm-2 requiredField" for="date">
                                             Doctor Id
                                             <span class="asteriskField">
                                              *
                                             </span>
                                            </label>
                                            <div class="col-sm-12">
                                             <div class="input-group">
                                              <div class="input-group-addon">
                                               
                                              </div>
                                              <input class="form-control" id="" name="id-schedule" type="text" required/>
                                             </div>
                                            </div>
                                           </div>
                                        <div class="form-group form-group-lg">
                                         <label class="control-label col-sm-2 requiredField" for="date">
                                          Date
                                          <span class="asteriskField">
                                           *
                                          </span>
                                         </label>
                                         <div class="col-sm-12">
                                          <div class="input-group">
                                           <div class="input-group-addon">
                                            
                                           </div>
                                           <input class="form-control" id="date" name="date" type="text" required/>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                         <label class="control-label col-sm-2 requiredField" for="scheduleday">
                                          Day
                                          <span class="asteriskField">
                                           *
                                          </span>
                                         </label>
                                         <div class="col-sm-12">
                                          <select class="select form-control" id="scheduleday" name="day-schedule" required>
                                           <option value="Monday">
                                            Monday
                                           </option>
                                           <option value="Tuesday">
                                            Tuesday
                                           </option>
                                           <option value="Wednesday">
                                            Wednesday
                                           </option>
                                           <option value="Thursday">
                                            Thursday
                                           </option>
                                           <option value="Friday">
                                            Friday
                                           </option>
                                           <option value="Saturday">
                                            Saturday
                                           </option>
                                           <option value="Sunday">
                                            Sunday
                                           </option>
                                          </select>
                                         </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                         <label class="control-label col-sm-2 requiredField" for="starttime">
                                          Start Time
                                          <span class="asteriskField">
                                           *
                                          </span>
                                         </label>
       
                                         <div class="col-sm-12">
                                          <div class="input-group clockpicker"  data-align="top" data-autoclose="true">
                                           <div class="input-group-addon">
                                            <i class="fa fa-clock-o">
                                            </i>
                                           </div>
                                           <input class="form-control" id="starttime" name="starttime-schedule" type="text" required/>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                         <label class="control-label col-sm-2 requiredField" for="endtime">
                                          End Time
                                          <span class="asteriskField">
                                           *
                                          </span>
                                         </label>
                                         <div class="col-sm-12">
                                          <div class="input-group clockpicker"  data-align="top" data-autoclose="true">
                                           <div class="input-group-addon">
                                            <i class="fa fa-clock-o">
                                            </i>
                                           </div>
                                           <input class="form-control" id="endtime" name="endtime-schedule" type="text" required/>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="form-group form-group-lg">
                                         <label class="control-label col-sm-2 requiredField" for="bookavail">
                                          Availabilty
                                          <span class="asteriskField">
                                           *
                                          </span>
                                         </label>
                                         <div class="col-sm-12">
                                          <select class="select form-control" id="bookavail" name="avail-schedule" required>
                                           <option value="available">
                                            available
                                           </option>
                                           <option value="notavail">
                                            notavail
                                           </option>
                                          </select>
                                         </div>
                                        </div>
                                        <div class="form-group">
                                         <div class="col-sm-10 col-sm-offset-2">
                                          <button class="btn btn-primary " name="submit-schedule" type="submit">
                                           Submit
                                          </button>
                                         </div>
                                        </div>
                                       </form>
                                      </div>
                                     </div>
                                    </div>
                                   </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Schedule</h4>
                                <h6 class="card-subtitle">Click delete to delete Doctor's Schedule</h6>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Id</th>
                                                <th class="border-top-0">Id Doctors</th>
                                                <th class="border-top-0">Day</th>
                                                <th class="border-top-0">Start Time</th>
                                                <th class="border-top-0">End Time</th>
                                                <th class="border-top-0">Availability</th>
                                                <th class="border-top-0">Delete</th>
                                                <th class="border-top-0">Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM schedule WHERE avail='available';";
                                                $result = mysqli_query($conn, $sql);
                                                $check = mysqli_num_rows($result);

                                                if ($check > 0) {
                                                    while ($rows = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                            echo "<td>" . $rows['idSchedule'] . "</td>";
                                                            echo "<td>" . $rows['idDoctors'] . "</td>";
                                                            echo "<td>" . $rows['daySchedule'] . "</td>";
                                                            echo "<td>" . $rows['starttime'] . "</td>";
                                                            echo "<td>" . $rows['endtime'] . "</td>";
                                                            echo "<td>" . $rows['avail'] . "</td>";
                                                            echo "<td><a href='../../includes/delete-schedule.inc.php?id=$rows[idSchedule]'>Delete</a></td>";
                                                            echo "<td><a href='../../includes/change-schedule.inc.php?id=$rows[idSchedule]'>Change</a></td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List of Schedule</h4>
                                <h6 class="card-subtitle">Click delete to delete Doctor's Schedule</h6>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Id</th>
                                                <th class="border-top-0">Id Doctors</th>
                                                <th class="border-top-0">Day</th>
                                                <th class="border-top-0">Start Time</th>
                                                <th class="border-top-0">End Time</th>
                                                <th class="border-top-0">Availability</th>
                                                <th class="border-top-0">Delete</th>
                                                <th class="border-top-0">Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM schedule WHERE avail='full';";
                                                $result = mysqli_query($conn, $sql);
                                                $check = mysqli_num_rows($result);

                                                if ($check > 0) {
                                                    while ($rows = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                            echo "<td>" . $rows['idSchedule'] . "</td>";
                                                            echo "<td>" . $rows['idDoctors'] . "</td>";
                                                            echo "<td>" . $rows['daySchedule'] . "</td>";
                                                            echo "<td>" . $rows['starttime'] . "</td>";
                                                            echo "<td>" . $rows['endtime'] . "</td>";
                                                            echo "<td>" . $rows['avail'] . "</td>";
                                                            echo "<td><a href='../../includes/delete-schedule.inc.php?id=$rows[idSchedule]'>Delete</a></td>";
                                                            echo "<td><a href='../../includes/change-schedule-done.inc.php?id=$rows[idSchedule]'>Change</a></td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

            <footer class="footer text-center">
                Made by @zakky.okky</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script src="js/bootstrap-clockpicker.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <<script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
    <script type="text/javascript">
        $('.clockpicker').clockpicker();
    </script>
     <script type="text/javascript">
    $(function() {
    $(".delete").click(function(){
    var element = $(this);
    var id = element.attr("id");
    var info = 'id=' + id;
    if(confirm("Are you sure you want to delete this?"))
    {
     $.ajax({
       type: "POST",
       url: "deleteschedule.php",
       data: info,
       success: function(){
     }
    });
      $(this).parent().parent().fadeOut(300, function(){ $(this).remove();});
     }
    return false;
    });
    });
    </script>
    <script type="text/javascript">
                /*
                Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
                */
                $(document).ready(function(){
                    $('.filterable .btn-filter').click(function(){
                        var $panel = $(this).parents('.filterable'),
                        $filters = $panel.find('.filters input'),
                        $tbody = $panel.find('.table tbody');
                        if ($filters.prop('disabled') == true) {
                            $filters.prop('disabled', false);
                            $filters.first().focus();
                        } else {
                            $filters.val('').prop('disabled', true);
                            $tbody.find('.no-result').remove();
                            $tbody.find('tr').show();
                        }
                    });
    
                    $('.filterable .filters input').keyup(function(e){
                        /* Ignore tab key */
                        var code = e.keyCode || e.which;
                        if (code == '9') return;
                        /* Useful DOM data and selectors */
                        var $input = $(this),
                        inputContent = $input.val().toLowerCase(),
                        $panel = $input.parents('.filterable'),
                        column = $panel.find('.filters th').index($input.parents('th')),
                        $table = $panel.find('.table'),
                        $rows = $table.find('tbody tr');
                        /* Dirtiest filter function ever ;) */
                        var $filteredRows = $rows.filter(function(){
                            var value = $(this).find('td').eq(column).text().toLowerCase();
                            return value.indexOf(inputContent) === -1;
                        });
                        /* Clean previous no-result if exist */
                        $table.find('tbody .no-result').remove();
                        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                        $rows.show();
                        $filteredRows.hide();
                        /* Prepend no-result row if all rows are filtered */
                        if ($filteredRows.length === $rows.length) {
                            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                        }
                    });
                });
            </script>
</body>

</html>