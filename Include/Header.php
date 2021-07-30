<?php

    function headers(){
        ?>
            <!-- ======= Header ======= -->
            <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center">

                <h1 style="font-family: Cursive;" class="logo me-auto"><a href="index.php">Ebeneizer School</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="#">Finances</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <a href="Login.php" class="get-started-btn">Login</a>

                </div>
            </header><!-- End Header -->

        <?php
    }


?>