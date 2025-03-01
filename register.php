<?php include "header.php" ?>
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Register</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            
    		<!-- Register Section -->
            <section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                        
                        <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Create New Account</h2>
                        </div>
                        
                        <!-- Login Form -->
                        <div class="styled-form">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">                               
                                <div class="row clearfix">                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 mb-25">
                                        <input type="text" id="Name" name="First Name" value="" placeholder="First Name" required>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="last" name="lname" value="" placeholder="Last Name" required>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="email" id="email" name="email" value="" placeholder="Email address " required>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="user" name="phone_number" value="" placeholder="Username" required>
                                    </div>    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="puser" name="Password" value="" placeholder="Password" required>
                                    </div>    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="Confirm" name="Confirm Password" value="" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="row clearfix">
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-1"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-2"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-3"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-12 col-md-12 col-sm-12">
                                                <div class="check-box">
                                                    <input type="checkbox" name="remember-password" id="type-4"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="readon register-btn"><span class="txt">Sign Up</span></button>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users">Already have an account? <a href="login.html">Sign In</a></div>
                                    </div>
                                    
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- End Login Section --> 

        </div> 
        <!-- Main content End --> 
        <?php include "footer.php" ?>