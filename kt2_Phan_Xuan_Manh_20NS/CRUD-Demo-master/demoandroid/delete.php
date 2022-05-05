<?php

    $connection = mysqli_connect("localhost","root","","kt2_phan_xuan_manh");	  
    $id = $_POST["id"];

    $sql = "DELETE FROM data WHERE id='$id'";

    $result = mysqli_query($connection,$sql);

    if($result){
        echo "Data Deleted";

    }
    else{
        echo "Failed";
    }
    mysqli_close($connection);

?>