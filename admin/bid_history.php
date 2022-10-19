<?php 
require_once '../config.php';
session_start();


if(isset($_SESSION['admin_id']))
{
    $admin_id = $_SESSION['admin_id'];
}
else
{
    header("location: ../Nyumba Zetu/register/login.html");
}

$sql = "SELECT * FROM `admin` WHERE `admin_id`='$admin_id'";
$rs = mysqli_query($con, $sql);

if(mysqli_num_rows($rs) > 0)
{
    while($row = mysqli_fetch_assoc($rs))
    {
        $admin_name = $row['admin_name'];
        $admin_pic = $row['admin_pic'];

    }
}

$sql4 = "SELECT * FROM `requests` WHERE servicer_id='$admin_id'";
$rs4 = mysqli_query($con, $sql4);

if($rs4)
{
    if(mysqli_num_rows($rs4) > 0)
    {
        $total_requests = mysqli_num_rows($rs4);
    }
    else
    {
        $total_requests = 0;
    }
}

$sql5 = "SELECT * FROM requests WHERE servicer_id='$admin_id' AND viewed='no'";
$rs5 = mysqli_query($con, $sql5);
{
    if(mysqli_num_rows($rs5) > 0)
    {
        $pending_requests = mysqli_num_rows($rs5);
        
    }
}

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $admin_name ?></title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .col-xl-3 {
            max-width: 20% !important;
        }
        
        #accordionSidebar
        {
            background-color: black !important;
            background-image: linear-gradient(black, black) !important;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="property_manager.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $admin_name ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="property_manager.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Setings</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">My Settings: </h6>
                        <a class="collapse-item" href="../settings.php">Edit My Details</a>
                        <a class="collapse-item" href="../settings.php">Account</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Actions
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="properties.php">
                    <i class="fa-solid fa-house"></i>
                    <span>Properties</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="rentals.php">
                    <i class="fa-solid fa-house"></i>
                    <span>Rentals</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="bid_history.php">
                    <i class="fa-solid fa-signs-post"></i>
                    <span>Bid History</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="payment_logs.php">
                    <i class="fa-brands fa-paypal"></i>
                    <span>Payment Logs</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="requests.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Requests</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                
                <h5 class="text-center mb-2"><a href="../Nyumba Zetu/homepage.php" target="_blank"><strong>Nyumba Zetu<sup><i class="fa-solid fa-trademark"></i></sup></strong></a></h5>
                
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"><?php echo $pending_requests ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <?php 
                                    
                                    if(mysqli_num_rows($rs5) > 0)
                                    {   
                                        $action_btn = "<a class='dropdown-item text-center small text-gray-500' href='#requests-div'></a>";
                                        $total_requests = mysqli_num_rows($rs5);
                                        while($row = mysqli_fetch_assoc($rs5))
                                        {   
                                            $request_id = $row['request_id'];
                                            $requester_id = $row['requester_id'];
                                            $request_title = $row['request_title'];
                                            $date_sent = date_create($row['date_sent']);
                                            $dm = date_format($date_sent,"d l F  H:i");

                                            if($row['requester_type'] == 'client')
                                            {
                                                $ss5 = "SELECT client_name, picture_url FROM client WHERE client_id='$requester_id'";
                                                $rr5 = mysqli_query($con, $ss5);

                                                if(mysqli_num_rows($rr5) > 0)
                                                {
                                                    while($row = mysqli_fetch_assoc($rr5))
                                                    {
                                                        $requester_name = $row['client_name'];
                                                        $requester_pic = "../images/clients/".$row['picture_url'];
                                                    }
                                                }
                                            }

                                            else if($row['requester_type'] == 'broker')
                                            {
                                                $ss5 = "SELECT broker_name FROM broker WHERE broker_id='$requester_id'";
                                                $rr5 = mysqli_query($con, $ss5);

                                                if(mysqli_num_rows($rr5) > 0)
                                                {
                                                    while($row = mysqli_fetch_assoc($rr5))
                                                    {
                                                        $requester_name = $row['broker_name'];
                                                        $requester_pic = "../images/Brokers/".$row['broker_pic'];
                                                    }
                                                }
                                            }

                                            echo "<div class='admin-requests'>
                                                    <form action='requests.php' method='post'>
                                                    <a class='dropdown-item d-flex align-items-center' href='#'>
                                                        <div class='dropdown-list-image mr-3'>
                                                            <img class='rounded-circle' src='".$requester_pic."'
                                                                alt='...'>
                                                            <div class='status-indicator bg-success'></div>
                                                        </div>
                                                        <div class='font-weight-bold'>
                                                            <div class='text-truncate'>".$request_title."</div>
                                                            <div class='small text-gray-500'>".$requester_name."     ".$dm."</div>
                                                        </div>
                                                    </a>
                                                    <input type='hidden' name='rqid' value='".$request_id."'>
                                                    <button style='display: none;' id='view-request-btn' class='clear-btn' ></button>
                                                </form>
                                                </div> ";
                                        }
                                    }
                                    else
                                    {
                                        $action_btn = "<a class='dropdown-item text-center small text-gray-500' href=''>No New Notifications</a>";
                                    }
                                    echo $action_btn;
                                    ?>
                            
                                
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $admin_name ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo $admin_pic ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Start of main content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Offer History</h1>
                    <?php 
                    

                    $sq1 = "SELECT bid.*, client.client_name, property.property_name FROM `bid` JOIN client ON client.client_id = bid.client_id JOIN property ON property.property_id = bid.property_id ORDER BY property_name";
                    $rs1 = mysqli_query($con, $sq1);

                    if(mysqli_num_rows($rs1) > 0)
                    {
                        while($row = mysqli_fetch_assoc($rs1))
                        {
                            $offer_id = $row['bid_id'];
                            $property_name = $row['property_name'];
                            $amount = $row['amount'];
                            $client_name = $row['client_name'];
                            $date = $row['date_made'];
                            $approved = $row['bid_approval'];
                            $sta = $row['bid_status'];
                            $stat = $row['bid_state'];
                            $status = $state = '';

                            if($sta == 'open')
                            {
                                $status = "Accepting Offers";
                            }
                            else if($sta == 'closed' || $sta == 'blocked')
                            {
                                $status = "Not Accepting Offers";
                            }
                            
                            if($stat == 'complete')
                            {
                                $state = "Payment Complete";
                            }
                            else if($stat == 'incomplete' )
                            {
                                $state = "Payment Incomplete";
                            }
                            else if( $stat == 'pending')
                            {
                                $state = "Payment Pending";
                            }

                            echo "<p class='mb-4'>The table below shows the bid history for ".$property_name."</p>" ;

                            echo "<div class='card shadow mb-4'>
                                    <div class='card-header py-3'>
                                        <h6 class='m-0 font-weight-bold text-primary'>".$property_name."</h6>
                                        <p>".$status."</p>
                                    </div>
                                    <div class='card-body'>
                                        <div class='table-responsive'>
                                            <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                                <thead>
                                                    <tr>
                                                        <th>Offer ID</th>
                                                        <th>Property</th>
                                                        <th>Amount</th>
                                                        <th>Made By</th>
                                                        <th>Made On</th>
                                                        <th>Offer Status</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Offer ID</th>
                                                        <th>Property</th>
                                                        <th>Amount</th>
                                                        <th>Made By</th>
                                                        <th>Made On</th>
                                                        <th>Offer Status</th>
                                                        
                                                    </tr>
                                                </tfoot>

                                                
                                                
                                                <tbody>
                                                    <td>".$offer_id."</td>
                                                    <td>".$property_name."</td>
                                                    <td>".$amount."</td>
                                                    <td>".$client_name."</td>
                                                    <td>".$date."</td>
                                                    <td>".$state."</td>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>";

                            

                        }
                    }
                    ?>

                    

                    <!-- DataTales Example -->


                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nyumba Zetu 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to log out?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</html>