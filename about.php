<?php
session_start();
include "database.php";

if(isset($_SESSION['student_id'])){
	$student_id = $_SESSION['student_id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>

    
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
        <!-- Start Page Title -->
        <div class="pagetitle">
            <h1 id="profilpegawai">About</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./about.php">About</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Programming Language</h5>

                <!-- List group With Icons -->
                <ul class="list-group">
                    <li class="list-group-item"><i class="bi bi-dice-1"></i> &nbsp; HTML</li>
                    <li class="list-group-item"><i class="bi bi-dice-2"></i> &nbsp; CSS</li>
                    <li class="list-group-item"><i class="bi bi-dice-3"></i> &nbsp; JavaScript</li>
                    <li class="list-group-item"><i class="bi bi-dice-4"></i> &nbsp; PHP</li>
                    <li class="list-group-item"><i class="bi bi-dice-5"></i> &nbsp; Java</li>
                    <li class="list-group-item"><i class="bi bi-dice-6"></i> &nbsp; Python</li>
                </ul><!-- End List group With Icons -->

                </div>
            </div>

            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Favourites</h5>

                <!-- Accordion without outline borders -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        To Do
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                        <div class="accordion-body">I really love playing console games such as <code>Zelda BOTW & TOTK, Mario Series,</code> etc, on my Nintendo Switch.</div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Food
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample" style="">
                        <div class="accordion-body">I cant't live without spicy food, any kind of it would be my favourite such as<code> Jjampong, Masak Lemak Cili Api,</code> etc. Ramen Seirockya from Japanese restaurant also one of my favourite.</div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Songs
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample" style="">
                        <div class="accordion-body">Every songs from <code>My Chemical Romance, Pierce The Veil & The Goo Goo Dolls</code>. I would listen to this song when I'm writing my codes.</div>
                    </div>
                    </div>
                </div>
                <!-- End Accordion without outline borders -->

            </div>
            </div>
        </section>
    </main>

    <!--footer & link url js-->
    <?php include('assets/footer.php') ?>

    <script>
        $(document).ready(function(){
            $('.form-check-input').click(function() {
                $('.form-check-input').not(this).prop('checked', false);
            });
        });
    </script>
</body>
</html>