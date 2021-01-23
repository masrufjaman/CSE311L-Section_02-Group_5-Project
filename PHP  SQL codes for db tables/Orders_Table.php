<?php

$link = mysqli_connect("localhost", "root", "", "supershop_management_system");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE orders(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(3.),
    address VARCHAR(255) NOT NULL,
    pmode VARCHAR(50) NOT NULL,
    products VARCHAR(255) NOT NULL,
    amount_paid VARCHAR(100) NOT NULL
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>