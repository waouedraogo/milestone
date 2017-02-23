<?php
    include('open_db_connection.php');
    session_start();

       $member_id    = trim($_POST['member_id']);
       $first_name   = trim($_POST['first_name']);
       $last_name    = trim($_POST['last_name']);
       $password1    = trim($_POST['password1']); 
       $password2    = trim($_POST['password2']);
       $password3    = trim($_POST['password3']); 
    
    $sql = "update member set password1=?, password2=?  where member_id = ?;";
    //$sql = "update member set first_name=? where member_id = ?;";
    $stmt = $db->prepare($sql);
    var_dump($stmt = $db->prepare($sql));
    $stmt->bind_param('sss', $password2, $password3, $member_id);
    $stmt->execute(); 
    echo "I am here 3";
    $stmt->close();    
    
    $_SESSION["message"] = str_replace("'", "", $first_name)." ".str_replace("'", "", $last_name) ." Password successfully updated.";
            
    $db->close();
    header('Location: ../return.php');
?> 