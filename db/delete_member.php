<?php
    include('open_db_connection.php');
    session_start();

    $member_id    = trim($_POST['member_id']);
    $first_name   = "'".trim($_POST['first_name'])."'";
    $last_name    = "'".trim($_POST['last_name'])."'";
    
    $stmt = $db->prepare("delete from member where member_id = ?");
    $stmt->bind_param('i', $member_id);
    $stmt->execute();
    $stmt->close();
    
    $_SESSION["message"] = "Member ". str_replace("'", "", $first_name)." ".str_replace("'", "", $last_name). " successfully deleted.";

    $db->close();
    header('Location: ../return.php');
?> 