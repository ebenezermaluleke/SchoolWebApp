<?php

    function login(){
        ?>
            <main id="main">

                <!-- ======= Breadcrumbs ======= -->
                <div class="breadcrumbs" data-aos="fade-in">
                    <div class="container">
                        <h2>Login</h2>
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
                                            <label for="email">Enter your username or Email address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email or username" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="password">Enter your password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                        </div>
                                        
                                    </div>
                                
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                    </div>
                            
                                    <div class="text-center"><button type="submit">Login</button></div>
                                    <div class="text-center"><p>New to our school? Register<a href="Register.php"> Here.</p></div>

                                </form>

                            </div>

                        </div>

                    </div>
                </section><!-- End Contact Section -->

            </main><!-- End #main -->

        <?php
    }

?>