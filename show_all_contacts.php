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
  <h1>All Inquires Members</h1>
   <table style="width:100%">
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Comments</th> 
          </tr>
        
   <?php include ("db/show_contact_inquires.php");?>
 </table>
  
</main>
 <?php include ("includes/footer.php");?>
 </body>
</html>