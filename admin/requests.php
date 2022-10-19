<?php 
require_once '../config.php';
session_start();

$comm1 = $comm2 = "";

if(isset($_SESSION['admin_id']))
{
    $admin_id = $_SESSION['admin_id'];
    $admin_type = $_SESSION['admin_type'];
}
else
{
    header("location: ../Nyumba Zetu/register/login.html");
}

$total_tenants = $total_users = $total_owners = $total_brokers = $total_requests = 0;


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
$sql1 = "SELECT * FROM `client`";
$rs1 = mysqli_query($con, $sql1);

if($rs1)
{
    if(mysqli_num_rows($rs1) > 0)
    {
        $total_tenants = mysqli_num_rows($rs1);
    }
}

$sql0 = "SELECT * FROM `admin`";
$rs0 = mysqli_query($con, $sql0);

if($rs1)
{
    if(mysqli_num_rows($rs0) > 0)
    {
        $total_admins = mysqli_num_rows($rs0);
    }
}

$sql2 = "SELECT * FROM `broker`";
$rs2 = mysqli_query($con, $sql2);

if($rs1)
{
    if(mysqli_num_rows($rs2) > 0)
    {
        $total_brokers = mysqli_num_rows($rs2);
    }
}

$sql3 = "SELECT * FROM `owner`";
$rs3 = mysqli_query($con, $sql3);

if($rs3)
{
    if(mysqli_num_rows($rs3) > 0)
    {
        $total_owners = mysqli_num_rows($rs3);
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
        $comm1 = "You have no pending requests";
        $comm2 = "";
    }
}
$total_users = $total_owners + $total_brokers + $total_admins + $total_tenants;

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
<html lang="en">

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
            max-width: 16% !important;
        }
        #accordionSidebar
        {
            background-color: black !important;
            background-image: linear-gradient(black, black) !important;
        }
        .item
        {
            padding: 40px;
        }
        .request, .response
        {
            display: inline-block;
            padding: 10px;
            width: 48%;
        }
        .response
        {
            text-align: right;
        }
        .response-btn
        {
            border: none;
            background: inherit;
        }
        #response-form textarea
        {
            padding: 10px;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user_manager.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $admin_name ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="user_manager.php">
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

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="admins.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Administrators</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="brokers.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Brokers</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="owners.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Owners</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tenants.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Tenants</span></a>
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
                                    $sql5 = "SELECT * FROM requests WHERE servicer_id='$admin_id' AND viewed='no'";
                                    $rs5 = mysqli_query($con, $sql5);

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  echo $admin_name ?></span>
                                <img class="img-profile rounded-circle"
                                    src='<?php echo $admin_pic  ?>'>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="my_profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="account.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Account Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Your Requests</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                
                                
                                        <?php 
                                            $sql2 = "SELECT * FROM `requests` WHERE servicer_id='$admin_id' ORDER BY date_sent";
                                            $rs2 = mysqli_query($con, $sql2);

                                            if(mysqli_num_rows($rs2) > 0)
                                            {
                                                while($row = mysqli_fetch_assoc($rs2))
                                                {
                                                    $request_id = $row['request_id'];
                                                    $requester_id = $row['requester_id'];
                                                    $request_title = $row['request_title'];
                                                    $request_content = $row['request_content'];
                                                    $date_sent = date_create($row['date_sent']);
                                                    $dm = date_format($date_sent,"d l F  H:i");
                                                    
                                                    echo "<div class='item' style='border-bottom: 3px solid #dbdbdb;''>
                                                            <div class='request' style='border-right: 4px solid #8080804f;'>
                                                                <p><strong>".$request_title."</strong></p>
                                                                <p>".$request_content."</p>
                                                                <p>Sent on ".$dm."</p>
                                                            </div>";

                                                    $sq1 = "SELECT * FROM responses WHERE request_id='$request_id'";
                                                    $rs = mysqli_query($con, $sq1);
                                                    $rff = "<div class='response-form' style='display: none' id='".$request_id."'>
                                                                <form action='send_response.php' method='post'>
                                                                    <input type='hidden' name='rid' value='".$request_id."'>
                                                                    <input type='hidden' name='response-title' value='".$request_title."'>
                                                                    <textarea style='width: 100%;height: 90px; margin: 10px' name='response-content' placeholder='Type your response here...'></textarea>   
                                                                    <button style='background: black;color: white; margin: 10px'>Send</button>                                 
                                                                </form>
                                                            </div>";
                                                    if($rs)
                                                    {
                                                        if(mysqli_num_rows($rs) > 0)
                                                        {
                                                            while($row = mysqli_fetch_assoc($rs))
                                                            {
                                                                $response_title = $row['response_title'];
                                                                $date_sent1 = date_create($row['date_sent']);
                                                                $dm1 = date_format($date_sent,"d l F  H:i");
                                                                $response_content = $row['response_content'];

                                                                echo        "<div class='response resp' style='text-align: right;'>
                                                                                <div>
                                                                                    <input type='hidden' value='".$request_id."' id='x1'>";
                                                                echo                '<button title="New Response" class="response-btn" onclick="open_rf(\'' . $request_id . '\')" ><i style="width: 20px;height: 20px;" class="fa-solid fa-circle-plus"></i></button>';
                                                                echo            "
                                                                                </div>
                                                                                <div id='rrs'>
                                                                                <p><strong>".$response_title."</strong></p>
                                                                                <p>".$response_content."</p>
                                                                                <p>Sent on ".$dm1."</p>
                                                                                </div>

                                                                                ".$rff."
                                                                            </div>";
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "<div class='response'>
                                                                    <div>
                                                                        <input type='hidden' value='".$request_id."' id='x3'>";
                                                            echo        '<button title="New Response" class="response-btn" onclick="open_rf(\'' . $request_id . '\')" ><i style="width: 20px;height: 20px;" class="fa-solid fa-circle-plus"></i></button>';
                                                            echo        "
                                                                        </div>
                                                                    <div id='rrs'>
                                                                        <p style='text-align: right'>You have not sent any responses Yet.</p>
                                                                        </div>
                                                                    ".$rff."
                                                                </div>";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "<div class='response'>
                                                                <div>
                                                                    <input type='hidden' value='".$request_id."' id='x3'>";
                                                        echo        '<button title="New Response" class="response-btn" onclick="open_rf(\'' . $request_id . '\')" ><i style="width: 20px;height: 20px;" class="fa-solid fa-circle-plus"></i></button>';
                                                        echo        "
                                                                </div>
                                                                <div id='rrs'>
                                                                    <p style='text-align: right'>You have not sent any responses Yet.</p>
                                                                    </div>
                                                                ".$rff."
                                                            </div>";
                                                    }
                                                    echo "</div>";
                                                }


                                            }
                                        ?>
                                        
                        </div>
                    </div>
                </div>

                <script>
                    function open_rf(x)
                    {
                       
                        var b = document.getElementById("rrs");
                        var a = document.getElementById(x);


                        if(a.style.display === "none")
                        {
                            a.style.display = "block";
                            b.style.display = "none";

                        }
                        else if(a.style.display === "block")
                        {
                            a.style.display = "none";
                            b.style.display = "block";

                        }
                    }
                </script>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;Nyumba Zetu 2022</span>
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

</body>

</html>