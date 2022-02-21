<?php

include 'connection.php';
if(isset($_GET['deleteRegistration_number'])){
    $number=$_GET['deleteRegistration_number'];

    $sql=" DELETE FROM `employee` WHERE Registration_number=$number";
    $result =mysqli_query($conn, $sql);
    if($result){
        echo " yeeeesssssss deleted!!!  (ಥ﹏ಥ)";
    }else{
        die(mysqli_error($conn));
    }
}
