<?php

$link = mysqli_connect("localhost", "root", "", "supershop_management_system");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE employee(

    employee_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    e_name VARCHAR(30) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    e_email VARCHAR(30) NOT NULL,
    e_phone INT NOT NULL,
    city VARCHAR(10)
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>