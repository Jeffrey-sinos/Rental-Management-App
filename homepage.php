<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nyumba Zetu</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            #about a, .contact-section a
            {
                color: #64a19d !important;
            }
            #about a:hover
            {
                color: #42847e !important;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <?php 
            session_start();
            
                if(isset($_SESSION['client_id']) )
                {
                    $lpage = "../client/client_home.php";
                    $set1 = "style = 'display: none;'";
                    $set2 = "";
                }
                else if (isset($_SESSION['broker_id']) )
                {
                    $lpage = "../broker/broker_home.php";
                    $set1 = "style = 'display: none;'";
                    $set2 = "";
                }
                else if(isset($_SESSION['owner_id']))
                {
                    $lpage = "../owner/owner_home.php";
                    $set1 = "style = 'display: none;'";
                    $set2 = "";
                    echo $_SESSION['owner_id'];
                }
                else
                {
                    $set1 = "";
                    $set2 = "style = 'display: none;'";
                }
            ?>

            <div class="container px-4 px-lg-5">
                <a <?php echo $set1 ?> class="navbar-brand" href="register/login.html">Login</a>
                <a <?php echo $set1 ?> class="navbar-brand" href="register/register.html">Register</a>

                <a <?php echo $set2 ?> class="navbar-brand"  href="<?php echo $lpage ?>">Home</a>


                <a class="navbar-brand" href="../client/display.php">For Sale</a>
                <a class="navbar-brand" href="../client/rentals.php">Rentals</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Nyumba Zetu</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">The #1 Real Estate Management System in Kenya</h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="text-white mb-4">Ethos</h1>
                        <p class="text-white-50">
                            To establish a real estate system with a strong local brand, that has experienced staff offering exceptional service. To assist clients in making informed decisions when buying or selling residential, lifestyle, or rural property or requiring assistance with property management.
                        </p>
                        <p class="text-white-50">
                            <a href="register/register.html">Register Today</a>
                           to find or sell your dream house.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="" alt="" />
            </div>
        </section>

        <section class="content-section bg-primary text-black text-center" id="services">
                    <div class="container px-4 px-lg-5" style="box-shadow: rgba(123, 123, 123, 0.57) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(0, 0, 0, 0.35) 0px -2px 6px 0px inset; padding: 30px;">
                        <div class="content-section-heading">
                            <h3 class="text-secondary mb-0">Where to Start</h3>
                            <h2 class="mb-5">First Time User?</h2>
                        </div>
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa fa-home" aria-hidden="true"></i>
                                </span>
                                <h4><strong>Properties & Rentals</strong></h4>
                                <p class="text-faded mb-0">View and search through an extensive catalogue of Properties for sale and rent.</p>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-sack-dollar"></i></span>
                                <h4><strong>Making Offers</strong></h4>
                                <p class="text-faded mb-0">Make Offers as a Tenant to buy your dream house. </p>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></span>
                                <h4><strong>Pay</strong></h4>
                                <p class="text-faded mb-0">
                                    We offer several payment options. Pay rent and bills.
                                </p>
                            </div>
                                                        <div class="col-lg-3 col-md-6">
                                <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa fa-wrench" aria-hidden="true"></i></span>
                                <h4><strong>Services</strong></h4>
                                <p class="text-faded mb-0">Make service requests such as elecrtical repairs and maintenance. </p>
                            </div>
                        </div>
                        <br><br>

                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-money-bill-1"></i></i>
                                </span>
                                <h4><strong>Earn as Broker </strong></h4>
                                <p class="text-faded mb-0">Register a house on behalf of a client, receive offers, sell theproperty and receive a commission! Commissions range from 8.5 - 35%.</p>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <span class="service-icon rounded-circle mx-auto mb-3"><i class="fa-solid fa-user"></i></span>
                                <h4><strong>Property Owners</strong></h4>
                                <p class="text-faded mb-0">Register as a property owner and get a broker to sell your property and manage your rentals. View property progress and your tenants stay in your rentals.</p>
                            </div>
                        </div>
                    </div>
                </section>



                <section ></section>

        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img style="width: 60%" class="img-fluid mb-3 mb-lg-0" src="assets/img/home5.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Properties</h4>
                            <p class="text-black-50 mb-0">From old-fashioned to modern architectural masterpieces, Nyumba Zetu offers all types of properties to satisfy all tastes. Search through numerous categories of properties, for sale or for rent.</p> 
                            <p class="text-black-50 mb-0">Make bids or apply for letting. </p>
                            <p class="text-black-50 mb-0">We offer several payment options. Pay rent and bills.</p>
                            <p class="text-black-50 mb-0">Make service requests. </p>
                        </div>
                    </div>
                </div>

                

                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/news1.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Properties Turned Into Coffee Houses</h4>
                                    <p class="mb-0 text-white-50">One of the values of renovating an existing building is leveraging the patina, or lived-in feeling of a space, with old materials like, brick, metal... <a href="https://www.dewberry.com/insights-news/post/blog/2019/01/24/turning-old-buildings-into-community-coffee-shops" target="_blank" >Read More.</a></p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Project Two Row -->
                 <div class="row gx-0 justify-content-center mb-lg-0" >
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/news3.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Best Beach Properties</h4>
                                    <p class="mb-0 text-white-50">At these waterfront properties, travelers can cook their fresh catches in spacious kitchens, fall asleep to the sound of crashing waves... <a href="https://evolve.com/blog/homeowner-tips/best-places-to-buy-a-beach-house" target="_blank" >Read More.</a></p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Three Row-->
                
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/news2.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Best Interior Design Agency 2022</h4>
                                    <p class="mb-0 text-white-50">This is a list of best interior design companies in Kenya. Interior designers are creative professionals who make indoor spaces or interior spaces functional ... <a href="https://victormatara.com/list-of-best-interior-design-companies-in-kenya/">Read More</a></p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               

            </div>
        </section>
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
        <section class="contact-section bg-black">
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
                                <div class="small text-black-50">+254 784 746 360</div>
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
