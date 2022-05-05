<?php

     $connection = mysqli_connect("localhost","root","","kt2_phan_xuan_manh");	  
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];

    $sql = "INSERT INTO data(name,email,contact,address) VALUES ('$name','$email','$contact','$address')";

    $result = mysqli_query($connection,$sql);

    if($result){
        echo "Data Inserted";

    }
    else{
        echo "Failed";
    }
    mysqli_close($connection);

?>