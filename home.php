<?php
session_start();
include "database.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/img/logo.png" rel="icon">

    <title>Dashboard | Home</title>

    
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--link url-->
    <?php include('./assets/head.php') ?>
</head>
<body>
    
    <!--header -->
    <div class="header-main">
        <?php include('./assets/header.php') ?>
    </div>

    <!--sidebar nav-->
    <div class="sidebar-main">
        <?php include('./assets/nav.php') ?>
    </div>

    <!--main-->
    
    <main id="main" class="main">

    <div class="pagetitle">
        <h1 id="dashboard" >Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <!-- Profile Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                            <h5 class="card-title">Get To Know Me</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <a href="user-profile.php"><i class="bi bi-person-lines-fill"></i>
                                </div>
                                <div class="ps-3">
                                <h6>Click Me!</h6>
                                <span class="text-success small pt-1 fw-bold">Rose</span><span class="text-muted small pt-2 ps-1">Airyn</span>

                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Profile Card -->

                    <!-- About Card -->
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">About Me</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <a href="about.php"><i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                    <h6>Click Me!   </h6>
                                    <span class="text-danger small pt-1 fw-bold">Hobby</span><span class="text-muted small pt-2 ps-1">| Favourite Things</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End About Card -->

                
                </div>
            </div>
        </div>
    </section>

  </main>
    <!--footer & link url js-->
    <?php include('assets/footer.php') ?>
    <script type="text/javascript">
        function FilterPenolakan(){
            
        }
    </script>
</body>
</html>