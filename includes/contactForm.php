<?php
if($_POST['formSubmit'] == "Submit") 
{
   $varfname   = "'".trim($_POST['fname'])."'";
   $varlname   = "'".trim($_POST['lname'])."'";
   $varemail   = "'".trim($_POST['email'])."'";
   $varphone   = "'".trim($_POST['phone'])."'";
   $varcomment = "'".trim($_POST['message'])."'";
   $errorMessage ='';
   
}

 if(empty($varfname)) {
      $errorMessage .= "<li>Please enter your First Name!</li>";
   }
   if(empty($varlname)) {
      $errorMessage .= "<li>Please enter your Last Name!</li>";
   }
   if(empty($varemail)) {
      $errorMessage .= "<li>Please enter your Email!</li>";
   }
   if(empty($varphone)) {
      $errorMessage .= "<li>Please enter your Phone number!</li>";
   }else {
     echo "<p> <strong>Thanks for contacting Us Dear Customer bellow is the info we gathered from you.</strong> <br> <br>";
     echo "<strong>Name:</strong> ".$_POST["fname"]." ". $_POST["lname"]; 
     echo "<br>";
     echo "<strong>Phone: </strong>".$_POST["phone"];
     echo "<br>";
     echo "<strong>Comment:</strong> ".$_POST["message"];
     echo "<br>";
     echo "Our Team will contact you back within the next 24 hours from the email address you provided: ";
     echo "<strong>".$_POST["email"]."</strong>";
     
    $sql = "insert into contactus (first_name, last_name, email, comment ,phone) values 
   ($varfname, $varlname, $varemail, $varcomment, $varphone);";    
    //$sql = "SELECT * from member;";
    if ($db->query($sql) === TRUE) {
        //var_dump($result = $db->query($sql));
        //echo "Member ". str_replace("'", "", $varfname)." ".str_replace("'", "", $varlname) ." added.";
        return;
    } else {
        var_dump($result = $db->query($sql));
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $db->close();
    
   }
 
?> 