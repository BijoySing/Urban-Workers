<?php
 $FullName =filter_input(INPUT_POST,'full_name');
 $Email =filter_input(INPUT_POST,'email');
 if(!empty($name))
 {
    $host = "localhost";
    $dbname = "test";
    $dbpass = "";
    $dbuname = "root";
    $conn = new mysqli($host,$dbuname,$dbpass,$dbname);
   
        $sql = "INSERT INTO nihan (name,job) values('$name','$job')";
        if($conn->query($sql)){
            echo "new record inserted successfully ";
        }
        else
        {
            echo "error";
        }
        $conn->close();
    }
 
 
 ?>