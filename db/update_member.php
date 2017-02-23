<?php
    include('open_db_connection.php');
    session_start();

       $member_id    = trim($_POST['member_id']);
       $first_name   = trim($_POST['first_name']);
       $last_name    = trim($_POST['last_name']);
       $email        = trim($_POST['email']); 
       $password1    = trim($_POST['password1']);
       $password2    = trim($_POST['password2']); 
       $company_name = trim($_POST['company_name']); 
       $tel_number   = trim($_POST['tel_number']);
    
    $sql = "update member set first_name=?, last_name=?, email=?, password1=?, password2=?, company_name=?, tel_number=?  where member_id = ?;";
    //$sql = "update member set first_name=? where member_id = ?;";
    $stmt = $db->prepare($sql);
    var_dump($stmt = $db->prepare($sql));
    $stmt->bind_param('ssssssii', $first_name, $last_name, $email, $password1, $password2, $company_name, $tel_number, $member_id);
    $stmt->execute(); 
    echo "I am here 3";
    $stmt->close();    
    
    $_SESSION["message"] = "Member ". str_replace("'", "", $first_name)." ".str_replace("'", "", $last_name) ." info successfully updated.";
            
    $db->close();
    header('Location: ../return.php');
?> 