<?php

 $full_name =filter_input(INPUT_POST,'full_name');
 $email =filter_input(INPUT_POST,'email');
 $address =filter_input(INPUT_POST,'address');
 $city =filter_input(INPUT_POST,'city');
 $contact =filter_input(INPUT_POST,'contact');
 $service =filter_input(INPUT_POST,'service');
 $pass =filter_input(INPUT_POST,'pass');
 $confirm =filter_input(INPUT_POST,'confirm');
//  if(!empty($name))
//  {
    $host = "localhost";
    $dbname = "urban-workers";
    $dbpass = "";
    $dbuname = "root";
    $conn = new mysqli($host,$dbuname,$dbpass,$dbname);
   
        $sql = "INSERT INTO signupworkers (full_name,email,address,city,contact,service,pass,confirm) values('$full_name','$email','$address','$city','$contact','$service','$pass','$confirm')";
        if($conn->query($sql)){
            echo '<script>alert("Record saved successfully")</script>';
        }
        else
        {
            echo "error";
        }
        $conn->close();
    
 
 
 ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              