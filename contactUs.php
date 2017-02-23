<!DOCTYPE html>
<html>
	<head>
	  <title>Registration</title>
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
  <h1>Contact Us</h1>
  <?php include ("includes/sideMenu.php");?>
 <form action="php-form-processor.php" method="post">
	<input name="required"  type="hidden" value="fname,lname,email,phone">
	<input name="bgcolor"    type="hidden" value="#CCC">
	<input name="font_face"  type="hidden" value="Arial,Helvetica">
	<input name="font_size"  type="hidden" value="3">
	<input name="text_color" type="hidden" value="#FFF">
	<input name="return_link_title" type="hidden" value="Home">

	<fieldset>  <legend>Please file information  </legend>
	<label> *First Name : <input type="text" name="fname" autofocus="autofocus" value="<?=$varfname;?>" /></label> <br>

	<label> *Last Name : <input type="text" name="lname" size="20" value="<?=$varlname;?>" /></label> <br>

	<label> *Email : <input type="text" name="email" size="30" value="<?=$varemail;?>" /></label> <br>
	
	<label> *Telephone : <input type="text" name="phone" size="30" value="<?=$varphone;?>" /></label> <br>
	<label> Comment: <textarea name="message" rows="10" cols="30" value="<?=$message;?>">
	</textarea> </label> <br>
	

	</fieldset>

	<p> <input type="submit"  name="formSubmit" value="Submit"> <input type="reset"  value="Clear Form"> </p>
</form>

</main>
</body>
<?php include ("includes/footer.php");?>
</html>


