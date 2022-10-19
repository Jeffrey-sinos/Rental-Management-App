<?php
require_once '../config.php';
session_start();

$st = "color: #868a8a;";
$apr = "Not Approved";
//retrieve client_id
if(isset($_SESSION['client_id']))
{
	$client_id = $_SESSION['client_id'];

}

else
{
	echo "<script>alert('Login First!')</script>";
	header("location: ../Nyumba Zetu/homepage.php");
}

$client_email = $pay_btn = "";
$client_name = "";
$client_gender = "";
$client_phone_number = "";
$client_location = "";
$client_pic = "";

$bids =0;
$property_id =0;
$property_name;
$price;
$location;
$category;
$wish_pic;
$amount = 0;

$sql1 = "SELECT * FROM client WHERE client_id = '$client_id'";
$result1 = mysqli_query($con, $sql1);

if(mysqli_num_rows($result1) > 0)
{
	while($row = mysqli_fetch_assoc($result1))
	{
		$client_name = $row['client_name'];
		$client_gender = $row['gender'];
		$client_phone_number = $row['phone_number'];
		$client_location = $row['location'];
		$_SESSION['client_name'] = $client_name;
		$client_email = $row['email'];
		$client_pic = "../images/clients/".$row['picture_url'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../repms2.css">
	<script type="text/javascript" src="../repms.js"></script>
	<title><?php echo $client_name ?></title>
	<link href="../Nyumba Zetu/css/styles.css" rel="stylesheet" />
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<style>
		#client_details p
		{
			font-size: 1.4em;
		}
		.dropbtn {
		  background-color: #4CAF50;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		  cursor: pointer;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: white;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		  border-radius: 12px;
		  font-size: 17px;
		  text-align: left !important;
		}

		.dropdown-content a {
		  color: black !important;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  

		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
		  display: block;
		}

		.dropdown:hover .dropbtn {
		  background-color: #3e8e41;
		}
	</style>
</head>
<body>
	
	<div id="nn">
            
        <div class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" >                
                    
                    <div id="navbar_options" class="navbar-brand "><a style="font-size: 1.5em;" title="Nyumba Zetu" href="../Nyumba Zetu/homepage.php">Nyumba Zetu</a></div>
                    <div id="navbar_options" class="navbar-brand "><a href="display.php">For Sale</a></div>
                    <div id="navbar_options" class="navbar-brand "><a href="rentals.php">Rentals</a></div>
                    <div id="navbar_options" class="navbar-brand "><a href="#contact_info">Contact Us</a></div>

                    <div id="navbar_options" class="navbar-brand dropdown"><a href="../settings.php">Settings</a>
                    	<div class="dropdown-content">
						  <a href="../settings.php">My Details</a>
						  <a href="../settings.php">My Account</a>
						  </div>
                    </div>

                    <div id="navbar_options" class="navbar-brand ">
                    	

                    <div title="Logout">
					
					<label class="switch">
						<a href="logout.php">
							<input type="checkbox">
							<span class="slider round"></span>
						</a>
					</label>
							
				</div>
                    </div>

                </div>
    </div>

        
    <div id="client_home ">
			<div id="client_home_top"> 

			    <div id="client">
			    	<fieldset>
			    		<div id="client_pic">
			    			<img style="width: 200px;height: 200px; border-radius: 50%;object-fit: cover;" src="<?php echo $client_pic ?>">
			    		</div>
			    		
			    		<div id="client_details">
			    			<p><strong>Name: </strong><?php echo $client_name ?></p>
			    			<p><strong>Email: </strong><?php echo $client_email ?></p>
			    			<p><strong>Location: </strong><?php echo $client_location ?></p>

			    		</div>
			    		</fieldset>
			    </div>
			</div>

			<div id="client_home_bottom">
				
			</div>


		</div>

		<!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section id="contact_info" class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Third-Wheel Avenue, Kileleshwa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">nyumbazetuke@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+254 704 172 740</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Nyumba Zetu KE 2022</div></footer>
	

</body>
</html>