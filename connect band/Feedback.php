<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "connectband");
if(!isset($_SESSION['userid']))
{
	//$message = "Log in First.";
	//echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script>
	alert('Log in First.');
	window.location.href='http://localhost/connect%20band/index.php';
	</script>";
	//$url = "http://localhost/connect%20band/index.php";
	//header('Location: '.$url);
}

//////$connect = mysqli_connect("localhost", "root", "", "connectband");
if($connect === true){
	
	$result = $conn->query("select * from category_master");
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
  <?php  ?>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Cocoon -Portfolio">
    <meta name="keywords" content="Cocoon , Portfolio">
    <meta name="author" content="Pharaohlab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> Connect Band </title>
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
                        <a href="contact.php">
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
														$bandid = $_POST['band_id'];
														if (isset($_POST['btnsubmit']))
														{
															
															
															//////////$connect = mysqli_connect("localhost", "root", "", "connectband");  
																if($connect === false){
																	die("ERROR: " . mysqli_connect_error());
																}
																else
																{
																	$result = $connect->query('SELECT * FROM `band_master` where band_id = '.$bandid);
																	while($row = mysqli_fetch_array($result))  
																	{
																		echo '<h5>'.$row['band_name'].'</h5>';
																		//echo '<img src="'.$row['band_image1'].'/>';
																		echo '<p>'.$row['band_info'].'</p>';
																		//<img src="resources/port3.png" height="200" width="200" class="img-thumnail" /> 
																	}
																}
															//mysqli_close($connect);
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
														<?php

															////$connect = mysqli_connect("localhost", "root", "", "connectband");  
																if($connect === false){
																	die("ERROR: " . mysqli_connect_error());
																}
																else
																{
																	$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = ".$bandid."");
																		while($row = mysqli_fetch_array($result))  
					
																		{
																			//echo '<li id='.$id.' onclick=getclick('.$id.')>'.$name.'</li>'."\n";
																			//echo '<center>'."Band Name".'</center>';
																			//echo '<br>';
																			//echo $bandid;
																			echo '<span class="'."counter".'">'.$row['Count'].'</span>';
																		}
																	//}
																}
															//mysqli_close($connect);
													    ?>
														<!--<span class="counter">100</span>-->
                                                        <h5>No of feedbacks</h5>
														
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <!--=================== counter end====================-->
                                    </div>
									
                                    <!--===================testimonial start====================-->
                                    <div class="testimonial_carousel mt50">
										<?php

											//////////$connect = mysqli_connect("localhost", "root", "", "connectband");  
												if($connect === false){
													die("ERROR: " . mysqli_connect_error());
												}
												else
												{
													$result = $connect->query("SELECT fm.feedback_data as 'feedback_data', um.first_name as 'first_name' , um.last_name as 'last_name' FROM feedback_master fm, user_master um where fm.band_id = ".$bandid." and um.user_id = fm.user_id ORDER BY RAND() LIMIT 4");
													if(mysqli_num_rows ($result )>0)
													{
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
														?>
														
														<p>project manager <span>company</span></p>
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
												}
											//mysqli_close($connect);
										?>
                                         </div>
										 <div class="col-12">
										 <?php
											if (isset($_POST['send']))
											{
												$conn = mysqli_connect("localhost", "root", "", "connectband") 
														or die ('Cannot connect to db');
												if($conn==true)
												{
													echo "connected";
												}
											}
										 
										 
										 
										 
										 
										 ?>
											<form method="post" action="datapass.php">
												<?php
													echo '<input name="'."band_id".'" type="'."text".'" value="'.$bandid.'" hidden>';
												?>
												<textarea  name="message" placeholder="Message" id="showthis" style="display:none" class="form-control" cols="4" rows="4" required></textarea>
											    <input id="buttonsubmit" type="submit"  name="send" style="display:none" class="my-control" value="Submit Feedback">
											 </form>
										  
										 </div>
								
											<div class="col-12">
											  
												<input id="btnsbmit" type="submit"  onclick="myfunc2()" name="Coldplay" class="btn btn-primary" value="Write a review">
												
											</div>
										<br>
										<form method="post" action="allfeedback.php">
										<?php  
										
											echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'."View All Feedbacks".'">';
											echo '<input name="'."band_id".'" type="'."text".'" value="'.$bandid.'" hidden>';
										?>	
										</form>
										
										<script type="text/javascript">
										  function myfunc2() {
											  
											  //alert("hey");
											var selectedobj1=document.getElementById('btnsbmit');
											
											var selectedobj2=document.getElementById('buttonsubmit');
											 if(selectedobj2.className=='my-control'){  //check if classname is hide
												selectedobj2.style.display = "block";

												selectedobj2.className ='btn btn-primary';

											  }else{
												selectedobj2.style.display = "none";
												selectedobj2.className ='hide';
											  }
											selectedobj1.style.visibility = "hidden";
											var selectedobj=document.getElementById('showthis');
											  if(selectedobj.className=='form-control'){  //check if classname is hide
												selectedobj.style.display = "block";

												selectedobj.className ='form-control';

											  }else{
												selectedobj.style.display = "none";
												selectedobj.className ='hide';
											  }
										  }
										</script>
                                    <!--===================testimonial end====================-->
                                </div>
                            </div>
                        </div>
						<?php
							if($connect === false){
								die("ERROR: " . mysqli_connect_error());
							}
							else
							{
								$result = $connect->query('SELECT * FROM `band_master` where band_id = '.$bandid);
								while($row = mysqli_fetch_array($result))  
								{
									echo '<div class="col-md-6 col-5 img_section" style="background-image: url('.$row['band_detailImage'].');"></div>';
									//echo '<h5>'.$row['band_name'].'</h5>';
									//echo '<img src="'.$row['band_image1'].'/>';
									//echo '<p>'.$row['band_info'].'</p>';
									//<img src="resources/port3.png" height="200" width="200" class="img-thumnail" /> 
								}
							}
						?>
                       
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
<?php

mysqli_close($connect);

?>