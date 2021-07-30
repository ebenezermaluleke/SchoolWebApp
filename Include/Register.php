<?php

    function register(){
        ?>
            <main id="main">

                <!-- ======= Breadcrumbs ======= -->
                <div class="breadcrumbs" data-aos="fade-in">
                    <div class="container">
                        <h2>Register</h2>
                        <h6 stlye="font-family: cursive;">Only your teacher or school can add you to the school and class, you cannot register yourself. Contact relevent department</h6>
                    </div>
                </div><!-- End Breadcrumbs -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">

                        <div class="row mt-5">

                            <div class="col-lg-8 mt-5 mt-lg-0">

                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <label for="email">First Name</label>
                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="e.g Ebeneizer" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="text">Last Name</label>
                                            <input type="text" name="lname" class="form-control" id="lname" placeholder="e.g Maluleke" required>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <label for="email"> Email address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email or username" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="password">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" id="dob" placeholder="" required>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="password">Enter your password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                        </div>
                    
                                        <div class="col-md-6 form-group">
                                            <label for="password">Re-enter your password</label>
                                            <input type="password" name="rpassword" class="form-control" id="rpassword" placeholder="Password" required>
                                        </div>
                                        
                                    </div>
                                    
                                
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                    </div>
                            
                                    <div class="text-center"><button type="submit">Register</button></div>
                                    <div class="text-center"></div>

                                    <div class="text-center"><p>Have an account? Login<a href="Login.php"> Here.</p></div>

                                </form>

                            </div>

                        </div>

                    </div>
                </section><!-- End Contact Section -->

            </main><!-- End #main -->

        <?php
    }

?>