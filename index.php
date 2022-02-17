<?php

include 'connection.php';
if(isset($_POST["submit"])){
    $number = $_POST["Registration_number"];
    $last = $_POST["Last_name"];
    $first = $_POST["First_name"];
    $birth = $_POST["Birth_date"];
    $department = $_POST["Department"];
    $salary = $_POST["Salary"];
    $occupation = $_POST["Occupation"];
    $picture = $_POST["Picture"];


    $sql = "INSERT INTO `employee` (Registration_number, Last_name, First_name, Birth_date, Department, Salary, Occupation, Picture) 
    VALUES ('$number','$last','$first','$birth','$department','$salary','$occupation');";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "successful !!!!";
        header('location: add.php');
    }else{
        die(mysqli_error($conn));
    }
    
}

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <form  method = "POST" >
        <br><br>
        <div class="row">
            <div class="col"> 
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Registration_number" name="Registration_number">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last_name" name="Last_name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="First_name" name="First_name">
            </div>
            <div class="col">
                <input type="date" class="form-control" placeholder="Birth_date" name="Birth_date">
            </div>
            <div class="col">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Department" name="Department">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Salary" name="Salary">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Occupation" name="Occupation">
            </div>
            <div class="col">
                <input type="file" class="form-control" placeholder="Picture" name="Picture">
            </div>
            <div class="col">
            </div>
        </div>
        <button type = "submit" name = "submit" class="btn btn-primary">submit</button>
    </form>

 


    <?php
        // $sql = "INSERT INTO employee (Registration_number, Last_name, First_name, Birth_date, Department, Salary, Occupation, Picture) 
        // VALUES ('1123' , 'Shoto' , 'Todoroki' , '14/03/2001' , 39999 , 'administration' , 'chef' );";
        // // "SELECT * FROM employee;";
        // $result = mysqli_query($conn, $sql);
        // $test = mysqli_num_rows($result);

        // if($test > 0){
        //     while($row = mysqli_fetch_assoc($result)){
        //         echo $row['First name'] . "<br>" ;
        //     }
        // }
    ?>
</body>
</html>