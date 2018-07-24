

<!DOCTYPE html>
<html lang="en">

<?php session_start(); 
$connect = mysqli_connect("localhost", "root", "", "connectband"); 



?>
<head>
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
			<li>
			<?php
				
				if(isset($_SESSION['userid']))
				{
					 
					$userid = 0;
					$userid = $_SESSION['userid'];
					$username = $_SESSION['username'];
					if($userid>0)
					{
						
						echo '<h4 class="'."side_title".'">Welcome   '.$username.'</h4>';
						//echo "Welcome  ".$username." !";
						//echo '<input name="'."band_id".'" type="'."text".'" value="'.$bandid.'" hidden>';
						echo '<br>';
						echo '<a href="'."logout.php".'">';
						echo 'Logout';
						echo '</a>';
					}
				}
				else
				{
					//echo '<input name="'."band_id".'" type="'."text".'" value="'.$bandid.'" hidden>';
					echo '<a href="'."login.php".'">';
					echo 'Login/ Register';
					echo '</a>';
				}
				
			?>
				<!--<a href="login.php">
					Login/ Register
				</a>-->
            </li>
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
        <div class="side_menu_section">
          <h4 class="side_title">filter by:</h4>
          <ul id="filtr-container" class="filter_nav">
            <li data-filter="*" class="active"><a href="javascript:void(0)">all</a></li>
            <li data-filter=".Rock"> <a href="javascript:void(0)">Rock</a></li>
            <li data-filter=".Pop"><a href="javascript:void(0)">Pop</a></li>
            <li data-filter=".Jazz"><a href="javascript:void(0)">Jazz</a></li>
            <li data-filter=".Metal"><a href="javascript:void(0)">Metal</a></li>
            <li data-filter=".Country"><a href="javascript:void(0)">Country</a></li>
            <li data-filter=".Blues"><a href="javascript:void(0)">Blues</a></li>
          </ul>

			 <ul id="filtr-container" class="filter_nav">



			</ul>
    </div>

        <!--filter menu end -->


        <!--social and copyright -->
        <div class="side_menu_bottom">
          <div class="side_menu_bottom_inner">
            <!--<ul class="social_menu">
              <li>
                <a href="#"> <i class="ion ion-social-pinterest"></i> </a>
              </li>
              <li>
                <a href="#"> <i class="ion ion-social-facebook"></i> </a>
              </li>
              <li>
                <a href="#"> <i class="ion ion-social-twitter"></i> </a>
              </li>
              <li>
                <a href="#"> <i class="ion ion-social-dribbble"></i> </a>
              </li>
            </ul>-->
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
        <!--=================== filter portfolio start====================-->
        <div class="portfolio gutters grid img-container" visible="false">
          <div class="grid-sizer col-sm-12 col-md-6 col-lg-3"></div>
          <div class="grid-item Blues  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/2.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 2");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 2");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Rock  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/3.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 3");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 3");
					while($row = mysqli_fetch_array($result))  
					{
						////echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Rock  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/5.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 5");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 5");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Pop  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/6.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 6");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 6");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Pop  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/7.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 7");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 7");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Jazz  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/8.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 8");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 8");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Jazz  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/9.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 9");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 9");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Metal  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/10.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 10");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 10");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Metal  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/11.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 11");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 11");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Country  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/12.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 12");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 12");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Country  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/4.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 13");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 13");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <div class="grid-item Blues  col-sm-12 col-md-6 col-lg-3">
			
              <div class="project_box_one">
                <img src="assets/img/portfolio/1.jpg" alt="pro1" />
                <div class="product_info">
                  
                </div>
              </div>
			  <br>
			  <form action="Feedback.php" method="post" align="left">
			  <?php   ?>
			   <h5>
				  <center>
					<div class="col-12">

						<!--<input type="submit" name="Coldplay" class="btn btn-primary" value="Band Name">-->
				  
			  <?php

					//$connect = mysqli_connect("localhost", "root", "", "connectband");  
						if($connect === false){
							die("ERROR: " . mysqli_connect_error());
						}
						else
						{
							$result = $connect->query("SELECT * FROM `band_master` where band_id = 14");
							while($row = mysqli_fetch_array($result))  
							{
								echo '<input name="'."btnsubmit".'" type="'."submit".'" class="'."btn btn-primary".'" value="'.$row['band_name'].'">';
								echo '<input name="'."band_id".'" type="'."text".'" value="'.$row['band_id'].'" hidden>';
							}
						}
						$_SESSION['bandid'] = $row['band_id'];
					//mysqli_close($connect);
			  ?>
			  <?php
			  
				//$connect = mysqli_connect("localhost", "root", "", "connectband");  
				if($connect === false){
					die("ERROR: " . mysqli_connect_error());
				}
				else
				{
					$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id and bm.band_id = 14");
					while($row = mysqli_fetch_array($result))  
					{
						//echo '<label>'."    ".$row['Count']."  Reviews".'</label>';
					}
				}
				//mysqli_close($connect);
			  
			  ?>
				</div>
				</center>
		       </h5>
			 </form>
			
		  </div>
          <!--=================== filter portfolio end====================-->
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