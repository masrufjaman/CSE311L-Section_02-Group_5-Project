<?php

$link = mysqli_connect("localhost", "root", "", "supershop_management_system");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE cart(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(100) NOT NULL,
    product_price VARCHAR(50 NOT NULL,
    product_image VARCHAR(255),
    qty INT NOT NULL,
    total_price VARCHAR(100),
    product_code VARCHAR(10) NOT NULL
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>