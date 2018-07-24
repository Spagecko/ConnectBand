<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "connectband";


$connect = mysqli_connect("localhost", "root", "", "connectband");
if($connect === true){

	$result = $connect->query("select * from category_master");
	while ($row = $result->fetch_assoc()) {
		unset($id, $name);
	  $id = $row['category_id'];
	  $name = $row['category_name'];
	  echo $id.' '.$name;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Cocoon -Portfolio">
    <meta name="keywords" content="Cocoon , Portfolio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Connectband </title>
    <!-- ========== Favicon Ico ========== -->
   <link rel="icon" href="assets/img/cb.png">
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>

<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        <!--=================== side menu ====================-->
        <div class="col-lg-2 col-md-3 col-12 menu_block">

            <!--logo -->
            <div class="logo_box">
                <a href="#">
                    <img src="assets/img/cb.png" alt="cocoon">
                </a>
            </div>
            <!--logo end-->

            <!--main menu -->
            <div class="side_menu_section">
                <ul class="menu_nav">
                    <li class="active">
                        <a href="index.php">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="contact.html">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <!--main menu end -->

            <!--filter menu -->

            <!--filter menu end -->


            <!--social and copyright -->
            <div class="side_menu_bottom">
                <div class="side_menu_bottom_inner">

                   <div class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				   </div>
                </div>
            </div>
            <!--social and copyright end -->

        </div>
        <!--=================== side menu end====================-->

        <!--=================== content body ====================-->

        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">

                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div>

                                      <div class="col-12 col-md-10">
                                          <div class="counter_box">

												 <?php
														if (isset($_POST['btnsubmit']))
														{
															//echo "method called";
															$bandid = $_POST['band_id'];
															//echo $bandid;

																if($connect === false){
																	die("ERROR: " . mysqli_connect_error());
																}
																else
																{
																	//echo "in else";
																	$result = $connect->query('SELECT * FROM `band_master` where band_id = '.$bandid);
																	while($row = $result->fetch_assoc())
																	{
																		echo '<h5>'.$row['band_name'].'</h5>';
																		//echo '<img src="'.$row['band_image1'].'/>';
																		echo '<p>'.$row['band_info'].'</p>';
																		//<img src="resources/port3.png" height="200" width="200" class="img-thumnail" />
																	}
																}
															//$connect -> close();
														}
											  ?>
                                         </div>
                                      </div>


                                        <!--=================== counter start====================-->
                                        <div class="pt50">
                                            <div class="row justify-content-center">

                                                <div class="col-12 col-md-4">
                                                    <div class="counter_box">

                                                        <div class="divider"></div>

														<!--<span class="counter">100</span>-->


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--=================== counter end====================-->
                                    </div>

                                    <!--===================testimonial start====================-->
                                    <div >
										<?php

											$dbhost = "localhost";
$dbuser = "batman";
$dbpass = "spiderman";
$db = "connectband";


												$connect = mysqli_connect("localhost", "root", "", "connectband"); 
												if($connect === false){
													die("ERROR: " . mysqli_connect_error());
												}
												else
												{
													$result = $connect->query("SELECT fm.feedback_data as 'feedback_data', um.first_name as 'first_name' , um.last_name as 'last_name' FROM feedback_master fm, user_master um where fm.band_id = ".$bandid." and um.user_id = fm.user_id");
													$i=0;
													while($row = mysqli_fetch_array($result))
													{
														
														echo '<div class="'."testimonial_box".'">';
														echo '<p>';
														echo $row['feedback_data'];
														echo '</p>';
														echo '<div class="'."testimonial_author".'">';
														if(($i%2)==0)
															{
																echo '<img src="'."assets/img/user.png".'" alt="'."author".'">';
															}
															else
															{
																echo '<img src="'."assets/img/pp1.png".'" alt="'."author".'">';
															}
														echo '<h5>'.$row['first_name'].' '.$row['last_name'].'</h5>';
                            echo '<div class="'."divider".'">';

													?>
                          </div>

													</div>
										<?php
														echo '</div>';

														//echo '<li id='.$id.' onclick=getclick('.$id.')>'.$name.'</li>'."\n";
														//echo '<center>'."Band Name".'</center>';
														//echo '<br>';
														//echo '<span class="'."counter".'">'.$row['Count'].'</span>';
														$i++;
													}
												}
									//$connect -> close();

										?>

                                         </div>
										 <div class="col-12">
											<form method="post" action="index.php">



										 </div>

											<div class="col-12">

												<input  type="submit"   name="back" class="btn btn-primary" value="Back">

											</div>
                      </form>

                                    <!--===================testimonial end====================-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-image: url('assets/img/bg/performer4.jpeg');"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>

<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/slick.min.js"></script>
<!--Portfolio Filter-->
<script src="assets/js/imgloaded.js"></script>
<script src="assets/js/isotope.js"></script>
<!-- Magnific-popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--Counter-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
</body>
</html>
<?php $connect -> close();?>