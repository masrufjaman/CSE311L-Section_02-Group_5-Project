<?php

$link = mysqli_connect("localhost", "root", "", "supershop_management_system");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE product(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(255) NOT NULL,
    product_price VARCHAR(100) NOT NULL,
    product_qty INT NOT NULL,
    product_image VARCHAR(255) NOT NULL,
    product_code VARCHAR(50) NOT NULL
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>