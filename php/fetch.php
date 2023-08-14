<html>
  <head>
    <title> MY_TABLE </title>
</head>
<body>
  <table border="2">
    <tr>
      <th>full_name</th>
      <th>service</th>
      <th>address</th>
      <th>contact</th>
</tr>
<?php 
  //echo "welcome to the stage where we are ready to get connected to the database <br>";
  //connecting to the db
  $servername="localhost";
  $username="root";
  $password = "";
  $database = "urban-workers";
  $conn = mysqli_connect($servername,$username,$password,$database);
  $sql = "SELECT * FROM signupworkers where full_name = 'bijoy' ";
  $data = mysqli_query($conn,$sql);
  //$result=mysqli_fetch_assoc($data);
  $count =mysqli_num_rows($data);
  if($count!=0)
  {
    
    while($result=mysqli_fetch_assoc($data))
    {
       echo "
       <tr>
       <td>".$result['full_name']."</td>
       <td>".$result['service']."</td>
       <td>".$result['address']."</td>
       <td>".$result['contact']."</td>
       ";
    }
  }
  //echo $result['sno']." ".$result['name']." ".$result['role']." ".$result['doj'];
  //$resultCheck = mysqli_num_rows($result);
  
?>
</table>
</body>
</html>
   
