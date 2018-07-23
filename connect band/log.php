<?php   
 session_start();  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Login Form by Using Bootstrap Modal with PHP Ajax Jquery</title> 
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		   
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		   
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Make Login Form by Using Bootstrap Modal with PHP Ajax Jquery</h3><br />  
                <br />  
                <br />  
                <br />  
                <br />  
                <br />  
                <?php  
                if(isset($_SESSION['username']))  
                {  
                ?>  
                <div align="center">  
                     <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />  
                     <a href="#" id="logout">Logout</a>  
                </div>  
                <?php  
                }  
                else  
                {  
                ?>  
                <div align="center">  
                     <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>  
                </div>  
                <?php  
                }  
                ?>  
           </div>  
           <br />  
      </body>  
 </html>  
 <div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Login</h4>  
                </div>  
                <div class="modal-body">  
                     <label>Username</label>  
                     <input type="text" name="username" id="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br />  
                     <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               $('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      });  
 });  
 </script>  