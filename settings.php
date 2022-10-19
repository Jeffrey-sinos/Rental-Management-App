<?php 
require_once 'config.php';
session_start();
$user_location = '';

if(isset($_SESSION['admin_id']))
{
    $admin_id = $_SESSION['admin_id'];
    $lo = "display: none";
    $home = "admin/".$_SESSION['admin_type'].".php";
}

else if(isset($_SESSION['broker_id']))
{
    $broker_id = $_SESSION['broker_id'];
    $lo = "";
    $home = "broker/broker_home.php";
}

else if(isset($_SESSION['client_id']))
{
    $client_id = $_SESSION['client_id'];
    $lo = "";
    $home = "client/client_home.php";
}
else if( isset($_SESSION['owner_id']))
{
    $owner_id = $_SESSION['owner_id'];
    $lo = "display: none";
    $home = "owner/owner_home.php";
}
else
{
    echo "<script>alert('Login in!')</script>";
    header('location: Nyumba Zetu/register/login.html');
}

if(isset($_SESSION['client_id']))
{
    $sql1 = "SELECT * FROM client WHERE client_id = '$client_id'";
    $result1 = mysqli_query($con, $sql1);

    if(mysqli_num_rows($result1) > 0)
    {
        while($row = mysqli_fetch_assoc($result1))
        {
            $username = $row['client_name'];
            $user_phone = $row['phone_number'];
            $user_location = $row['location'];
            $user_email = $row['email'];
            $user_pic = "images/clients/".$row['picture_url'];
        }
    }
}

if(isset($_SESSION['broker_id']))
{
    $sql1 = "SELECT * FROM broker WHERE broker_id = '$broker_id'";
    $result1 = mysqli_query($con, $sql1);

    if(mysqli_num_rows($result1) > 0)
    {
        while($row = mysqli_fetch_assoc($result1))
        {
            $username = $row['broker_name'];
            $user_phone = $row['broker_phone_number'];
            $user_location = $row['broker_location'];
            $user_email = $row['broker_email'];
            $user_pic = "images/Brokers/".$row['broker_pic'];
        }
    }
}


if(isset($_SESSION['owner_id']))
{
    $sql1 = "SELECT * FROM owner WHERE owner_id = '$owner_id'";
    $result1 = mysqli_query($con, $sql1);

    if(mysqli_num_rows($result1) > 0)
    {
        while($row = mysqli_fetch_assoc($result1))
        {
            $username = $row['owner_name'];
            $user_phone = $row['owner_phone'];
            $user_email = $row['owner_email'];
            $user_pic = "images/owners/".$row['owner_pic'];
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="w3schools.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="repms2.css">
    <style>
        body {
            background-image: url("Nyumba Zetu/assets/img/home6.jpg");
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            box-shadow: none;
            border: none
        }
        .profile-button:focus {

            box-shadow: none
        }

        .profile-button:active {
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }
        .add-experience
        {
            background: red !important;
            color: white !important;
        }
        .add-experience:hover {
            background: #ac2525 !important;
            color: white !important;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
        , #edit-pic {
        border: 1px solid #ccc;
        display: block;
        padding: 6px 12px;
        cursor: pointer;
        }
    </style>

</head>
<body>
    <div id="nn">
            
                <div class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" >                
                    
                    <div id="navbar_options" class="navbar-brand "><a title="Nyumba Zetu" style="font-size: 1.5em;" href="../Nyumba Zetu/homepage.php">Nyumba Zetu</a></div>
                    
                    <div id="navbar_options" class="navbar-brand "><a href="<?php echo $home ?>#contact_info">Contact Us</a></div>

                    <div id="navbar_options" title="Home" class="navbar-brand ">
                        <a href="<?php echo $home ?>" title=""><?php echo $username ?>
                        </a>
                    </div>

                    <div id="navbar_options" class="navbar-brand ">
                        

                    <div title="Logout">
                    
                    <label class="switch">
                        <a href="admin/logout.php">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </a>
                    </label>
                            
                </div>
                    </div>

                </div>
        </div>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                <form action="edit_settings.php" method="post" enctype="multipart/form-data">
                    <p>Click the Image to Edit.</p>
                    <label for="edit_pic">
                        <img class="rounded-circle mt-5" width="150px" src="<?php echo $user_pic ?>" id='new-pic'>
                    </label>
                    <br>
                    
                    <br><br>
                    <input type="file" style="display: none;" name="file" id="edit_pic" onchange="see('edit-pic')">


                    <input type="submit" name="edit-pic" id="edit-pic" value="Save" style="display: none;">
                    <br>
                    <span class="font-weight-bold"><?php echo $username ?></span>
                    <br>
                    <span class="text-black-50"><?php echo $user_email ?></span>
                    <br>
                    <span class="text-black-50">+254 <?php echo $user_phone ?></span>
                    <br>
                    <span class="text-black-50"><?php echo $user_location ?></span>
                    <br>
                </form>

                <script>
                    function see(x) {
                        var a = document.getElementById(x);
                        document.getElementById('new-pic').src = document.getElementById('edit_pic').value;
                        a.style.display = "inline-block";
                    }
                </script>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h4 class="text-right">Profile Settings</h4>
                </div>
                
                <form action="edit_settings.php" method="post">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Full Name</label>
                            <input type="text" class="form-control" name="new-name">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Phone Number</label>
                            <input type="int" class="form-control" name="new-phone">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Email Address</label>
                            <input type="text" class="form-control" name="new-email">
                        </div>

                        <div class="col-md-12" style="<?php echo $lo ?>">
                            <label class="labels">Location</label><input type="text" class="form-control" name="new-location">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Password</label>
                            <input type="password" class="form-control" name="new-pwd">

                            <div class="popup" >
                                <i class="fa-solid fa-circle-question" id="popupss" onclick="popup()"></i>
                                 <span class="popuptext" id="myPopup" style="display: none; font-size: 13px;color: #464444;">
                                     <ol>

                                         <li>Password should not contain parts of your name.</li>
                                         <li>Password should be a least 4 characters long.</li>
                                         <li>Password should not be similar to previous password</li>
                                     </ol>
                                 </span>
                            </div>
                            
                        </div>

                    </div>
                    
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="change-data" >Save Changes</button></div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <h4>Account</h4>
                <br><br>
                <p style="font-size: 14px;color: gray;">Click the button to delete your account permanently.</p>

                <form action="edit_settings.php" method="post">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span style="font-size: 18px; ">Delete Account</span>
                        
                        <input class="border px-3 p-1 add-experience"type="submit" name="delete-btn" value="Delete">
                            
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

    <script>
        // When the user clicks on div, open the popup
        function popup() {
          var popup = document.getElementById("myPopup");
          var style = popup.style.display;

          if(style ===  'block')
          {
            popup.style.display = 'none';
          }
          else if(style ===  'none')
          {
            popup.style.display = 'block';
          }
          popup.classList.toggle("show");
        }
    </script>

</body>
</html>