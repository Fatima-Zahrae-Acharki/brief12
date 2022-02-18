<?php
include "connection.php";
include "header.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>added employee</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="add.php" class="text-light">Add employee</a>
        </button>


        <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">Registration number</th>
      <th scope="col">Last name</th>
      <th scope="col">First name</th>
      <th scope="col">Birth date</th>
      <th scope="col">Department</th>
      <th scope="col">Salary</th>
      <th scope="col">Occupation</th>
      <th scope="col">Picture</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php
        
        $sql = "SELECT * FROM employee;";
        $result =mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $number = $row["Registration_number"];
                $last = $row["Last_name"];
                $first = $row["First_name"];
                $birth = $row["Birth_date"];
                $department = $row["Department"];
                $salary = $row["Salary"];
                $occupation = $row["Occupation"];
                $picture = $row["Picture"];
                echo '<tr>
                <th scope="row">'.$number.'</th>
                <td>'.$last.'</td>
                <td>'.$first.'</td>
                <td>'.$birth.'</td>
                <td>'.$department.'</td>
                <td>'.$salary.'</td>
                <td>'.$occupation.'</td>
                <td><img src="img/'.$picture.'" class="mypictures" ></td>
                <td>    
                    <a href="edit.php?editRegistration_number='.$number.'"><i class="bx bx-edit icon 2x "style="font-size:20px ; color:#59ba89"></i></a> 
                    <a href="delete.php?deleteRegistration_number='.$number.'"><i class="bx bx-trash icon 2x" style="font-size:20px ; color:#01575c"></i></a>
                </td>
                
              </tr>';
            }
        }
        
        
        ?>
  </tbody>
</table>
    </div>
    
</body>
</html>