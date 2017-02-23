<!DOCTYPE html>
<html lang="en">
<head>
	  <title>Show Memeberships</title>
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
  <h1>All Registered Members</h1>
   <table style="width:100%">
          <tr>
            <th>Member Id</th>
            <th>Salutation</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th> 
            <th>Password</th>
            <th>Confirmed password</th>
            <th>Company Name</th> 
            <th>Tel Number</th>
            <th>Date of Birth</th>
            <th>Work Status</th> 
            <th>Role</th>
          </tr>
        
   <?php include ("db/show_all_members.php");?>
 </table>
  
</main>
 <?php include ("includes/footer.php");?>
 </body>
</html>