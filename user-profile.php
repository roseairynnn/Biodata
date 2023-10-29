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
            <h1 id="profilpegawai">User Profile</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./user-profile.php">Profile</a></li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
            
            <?php 
            $student_id = "2022937777"; // Specify the student_id

            $qry = "SELECT * FROM `user` WHERE student_id = '$student_id'";
            $qryData = mysqli_query($con, $qry);
            $num = mysqli_num_rows($qryData);
            
            if($num > 0){
                $data = $qryData->fetch_assoc();
                
                $name = $data['name'];
                $id_number = $data['id_number'];
                $student_id = $data['student_id'];
                $dob = $data['dob'];
                $pob = $data['pob'];
                $gender = $data['gender'];
                $nationality = $data['nationality'];
                $language = $data['language'];
                $address = $data['address'];
                $email = $data['email'];
                $phone_number = $data['phone_number'];
                $photo = $data['photo'];
                $height = $data['height'];
                $weight = $data['weight'];

                //Extract dob from IC
                // substring identity to get bday
                $dob = substr($id_number, 0, 6);
                $dob = str_split($dob, 2);
                $currentCentury = floor(date('Y') / 100);
                if ($dob[0] > date('y')) {
                // year is in last century
                $dob[0] = ($currentCentury - 1) . $dob[0];
                } else {
                $dob[0] = $currentCentury . $dob[0];
                }
                $dob = $dob[2]."/".$dob[1]."/".$dob[0];
            }
            ?>

            <div class="card">  
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center" style="text-align: center; ">

                    <img src="<?php echo $photo; ?>" alt="Profile" style="max-width: 190px;">
                    <h2><?php echo $name; ?></h2> 
                    <h3><?php echo $student_id; ?></h3>

                    <div class="social-links mt-2">
                        <a href="https://wa.link/etvtnz" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                        <a href="mailto:airynomariza94@gmail.com" class="email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="https://www.linkedin.com/in/siti-rose-airyn-binti-omariza-387031166" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        <a href="tel:+601112820117" class="phone"><i class="bi bi-telephone-fill"></i></a>
                    </div>


                </div>
            </div>

            </div>

            <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">

                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">User Profile</button>
                    </li>

                </ul>


                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
                    <h5 class="card-title">User's Information</h5>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $name; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">IC Number</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $id_number; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Student ID</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $student_id; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Age</div>
                        <div class="col-lg-9 col-md-8">: 22</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Date of Birth</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $dob; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Place of Birth</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $pob; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Gender</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $gender; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Height</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $height; ?> CM</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Weight</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $weight; ?> KG</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $email; ?></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Nationality</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $nationality; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Language</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $language; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $address; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Phone Number</div>
                        <div class="col-lg-9 col-md-8">: <?php echo $phone_number; ?></div>
                    </div>

                </div>
                <!-- End Bordered Tabs -->
                </div>
            </div>
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