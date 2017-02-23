<?php
    include('open_db_connection.php');
    include('Member.php'); 
        $member_id    = '';
        $salutation   = '';
        $first_name   = '';
        $last_name    = '';
        $email        = '';
        $password1    = '';
        $password2    = '';
        $company_name = '';
        $tel_number   = '';
        $dob          = '';
        $work_status  = '';
        $role         = '';
        
    
    $membersArray = array();

    $sql = "SELECT member_id, first_name, last_name, email, password1, password2, company_name, tel_number, dob, salutation, role FROM member ORDER BY member_id;"; 
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
           $member_id    = $row["member_id"];
           $first_name   = $row["first_name"];
           $last_name    = $row["last_name"];
           $email        = $row["email"];
           $password1    = $row["password1"];
           $password2    = $row["password2"]; 
           $company_name = $row["company_name"]; 
           $tel_number   = $row["tel_number"];
           $dob          = $row["dob"];
           $work_status  = $row["work_status"]; 
           $role         = $row["role"];
           $salutation   = $row["salutation"];
           //echo "I am here ". $salutation ." ". $first_name ." ". $last_name;     
           $member = new Member ($member_id, $first_name, $last_name, $email, $password1, $password2, $company_name, $tel_number, $dob, $work_status, $role, $salutation);
           //$member->getFirstName();
           
           //	foreach ($membersArray as $member)
           //{
            echo "<tr>";
        	    echo "<td>".$member_id."</td>";
        	    echo "<td>".$first_name."</td>";
        	    echo "<td>".$last_name."</td>";
        	    echo "<td>".$email."</td>";
        	    echo "<td>".$password1."</td>";
        	    echo "<td>".$password2."</td>";
        	    echo "<td>".$company_name."</td>";
        	    echo "<td>".$tel_number."</td>";
        	    echo "<td>".$dob."</td>";
        	    echo "<td>".$work_status."</td>";
        	    echo "<td>".$role."</td>";
        	    echo "<td>".$salutation."</td>";
            echo "</tr>";
        
           //}
           //echo $student ->formatStudentInfo()."<br>";var_dump($member);
           //array_push($membersArray, $member);
                 
            }
    } else {
        echo "0 rows in the member table";
    } 
    
    $db->close();
   // for($x = 0; $x < $arrlength; $x++) {
   //     echo $membersArray[$x]->formatMemberInfo()."<br>";
   // }

    echo "Total Membership Count is ". "<b>". Member::$membersCount. "</b>"."</br>";
    echo "</br>";
    
    //return $membersArray;
    
?>     