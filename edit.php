<?php

include 'connection.php';
$number=$_GET['editRegistration_number'];
$sql=" SELECT * FROM `employee` WHERE Registration_number=$number ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$number = $row["Registration_number"];
$last = $row["Last_name"];
$first = $row["First_name"];
$birth = $row["Birth_date"];
$department = $row["Department"];
$salary = $row["Salary"];
$occupation = $row["Occupation"];



if(isset($_POST["submit"])){
    
    $last = $_POST["Last_name"];
    $first = $_POST["First_name"];
    $birth = $_POST["Birth_date"];
    $department = $_POST["Department"];
    $salary = $_POST["Salary"];
    $occupation = $_POST["Occupation"];
    $picture = $_FILES["Picture"]["name"];
    $tmp_picture = $_FILES["Picture"]["tmp_name"];
    $filelocation = "img/".$picture;


  

    $sql=" UPDATE `employee` SET Registration_number=$number, Last_name='$last', First_name='$first', Birth_date='$birth', Department='$department', Salary='$salary', Occupation='$occupation', Picture='$picture' WHERE Registration_number=$number";
    $result =mysqli_query($conn,$sql);
    move_uploaded_file($tmp_picture,$filelocation);
    if($result){
        echo "yeaaaahhhh edited !!!!";
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
<link rel="stylesheet" href="style.css">
</head>
<body>

    <form  method = "POST" enctype="multipart/form-data" >
        <br><br>
        <div class="row">
            <div class="col"> 
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Registration_number" name="Registration_number" value=<?php echo $number; ?>>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last_name" name="Last_name" value=<?php echo $last; ?>>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="First_name" name="First_name" value=<?php echo $first; ?>>
            </div>
            <div class="col">
                <input type="date" class="form-control" placeholder="Birth_date" name="Birth_date" value=<?php echo $birth; ?>>
            </div>
            <div class="col">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Department" name="Department" value=<?php echo $department; ?>>
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Salary" name="Salary" value=<?php echo $salary; ?>>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Occupation" name="Occupation" value=<?php echo $occupation; ?>>
            </div>
            <div class="col">
                <input type="file" class="form-control" placeholder="Picture" name="Picture" >
            </div>
            <div class="col">
            </div>
        </div>
        <button type = "submit" name = "submit" class="btn btn-primary">update</button>
    </form>


</body>
</html>