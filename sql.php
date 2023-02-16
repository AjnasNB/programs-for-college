<?php
$server="localhost";
$user="root";
$pass="6571370";
$db="name";



$connect= new mysqli($server,$user,$pass,$db);
if(!$connect){
    die("Connection failed: " . mysql_connect_error());
}
else
{
    echo "Connected successfully";
}
// $sql = "CREATE TABLE siri(
//     id INT(2) PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50)
//     )";
//  $connect->query($sql);
// $sql = "INSERT INTO siri (id, firstname, lastname, email)
//  VALUES (2, 'Sara', 'Sara', 'sara@gmail.com')";
// $connect->query($sql);
// if($connect->query($sql)===TRUE)
// {
//     echo "\nNew record created successfully";
// }
// else
// {
//     echo "Error: " . $sql . "<br>" . $connect->error;
// }
$sql="SELECT *FROM siri" ;
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        {echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "mail :".$row["email"] ."<br>";
    }}
} else {
    echo "0 results";
}




// if($connect->query($sql)===TRUE)
// {
//     echo "Database created successfully";
// }
// else
// {
//     echo "Error creating database: " . $connect->error;
// }

?>