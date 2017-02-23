<?php
    include('open_db_connection.php');
    session_start();
       //$member_id    = "'".trim($_POST['member_id'])."'";
       $first_name   = "'".trim($_POST['first_name'])."'";
       $last_name    = "'".trim($_POST['last_name'])."'";
       $email        = "'".trim($_POST['email'])."'"; 
       $password1    = "'".trim($_POST['password1'])."'";
       $password2    = "'".trim($_POST['password2'])."'"; 
       $company_name = "'".trim($_POST['company_name'])."'"; 
       $tel_number   = "'".trim($_POST['tel_number'])."'";
       $dob          = "'".trim($_POST['dob'])."'";
       $work_status  = "'".trim($_POST['work_status'])."'"; 
       $role         = "'".trim($_POST['role'])."'";
       $salutation   = "'".trim($_POST['salutation'])."'";
    
    $sql = "insert into member (first_name, last_name, email, password1, password2, company_name, tel_number, dob, work_status, role, salutation) values 
   ($first_name, $last_name, $email, $password1, $password2, $company_name, $tel_number, $dob, $work_status, $role, $salutation);";    
    //$sql = "SELECT * from member;";
    if ($db->query($sql) === TRUE) {
        //var_dump($result = $db->query($sql));
        echo "Member ". str_replace("'", "", $first_name)." ".str_replace("'", "", $last_name) ." added.";
    } else {
        var_dump($result = $db->query($sql));
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    //$sql = "SELECT member_id where first_name=? and last_name=?;"; 
    $sql = "SELECT member_id from member where first_name=".$first_name." and "."last_name=".$last_name.";";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
       $member_id    = $row["member_id"];
       echo $member_id;
        }
       
    } else {
        $member_id = "NO ID found from ".$first_name. " ".$last_name ;
    } 
    
    $_SESSION["message"] = "Welcome to Cornfed ".str_replace("'", "", $salutation)." ". str_replace("'", "", $first_name)." ".str_replace("'", "", $last_name). "<br>"
                           ."Your Memeber ID is : ".str_replace("'", "", $member_id) ;

    $db->close();
    header('Location: ../return.php');
?> 