<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "cornfed";
    //$database = "c9";
    $dbport = 3306;

    // Create database connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check if database connection was created
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    //echo "Database connection created successfully";
    

     $sql = "Select * From  contactus;";    
    //$sql = "SELECT * from member;";
    
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
           $varfname    = $row["first_name"];
           $varlname   = $row["last_name"];
           $varemail    = $row["email"];
           $varcomment  = $row["comment"];
           $varphone    = $row["phone"];
           
           echo "<tr>";
        	    echo "<td>".$varfname."</td>";
        	    echo "<td>".$varlname."</td>";
        	    echo "<td>".$varemail."</td>";
        	    echo "<td>".$email."</td>";
        	    echo "<td>".$varphone."</td>";
        	    echo "<td>".$varcomment."</td>";
            echo "</tr>";
            }   
    
            } else {
        echo "0 rows in the member table";
    } 
    
    $db->close();
    
?>    
    