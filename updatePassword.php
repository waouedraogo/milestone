<!DOCTYPE html>
<html lang="en">
<head>
	  <title>Update Password</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!-- Bootstrap core CSS -->
	  <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
      <link href="bootstrap.css" rel="stylesheet">
	  <link href="home.css" rel="stylesheet">
	  <script type="text/javascript" src="validateForm.js"></script>

	  <!-- Wendpanga Ouedraogo
     	Milestone 5
     	web360
     	G,Art,Skipp
     	20/20/17
	  -->
</head>

<body>
<?php include ("includes/header.php");?>   
<main >
  <h1>Update Membership Password</h1>
  

  <form name="myForm" role="form" class="form-horizontal" action="db/update_password.php" method="post">
   <div class="page-header">
      <h2></h2>
      <p>Please Enter Your Name and Membership ID to update your password</p>   
   </div>
     
     
     <div class="form-group">
       <label for="fName" class="col-md-3 control-label">Member ID</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="member_id" >
       </div>
     </div>
     
     <div class="form-group">
       <label for="fName" class="col-md-3 control-label">First Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="first_name" >
       </div>
     </div>
     
     <div class="form-group">
       <label for="lName" class="col-md-3 control-label">Last Name</label>
       <div class="col-md-9">
       <input type="text" class="form-control" name="last_name" >
       </div>
     </div>
      
     <div class="form-group">
       <label for="password1" class="col-md-3 control-label">OLd Password</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password1">
       </div>
     </div>
     <div class="form-group">
       <label for="password2" class="col-md-3 control-label">New Password</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password2">
       </div>
     </div>
     
      <div class="form-group">
       <label for="password3" class="col-md-3 control-label">Confirm New Password</label>
       <div class="col-md-9">
       <input type="password" class="form-control" name="password3">
       </div>
     </div>
  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
        <!--<input type="submit" value="Submit"> -->
        <!--<input type="submit" name="submit" value="Submit" /> -->
      <button type="submit"  name="submit" value="Submit" class="btn btn-primary">Update</button> 
    </div>
  </div>
  </form>  
</main>
 <?php include ("includes/footer.php");?>
 </body>
</html>