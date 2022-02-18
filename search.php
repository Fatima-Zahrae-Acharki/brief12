<?php
include "connetion.php";
echo "sekai";







$search = $_POST["search"];
// mysql_connect("localhost", "username", "password") OR die (mysql_error());
// mysql_select_db ("your_db_name") or die(mysql_error());

// $query = "SELECT * FROM `employee` WHERE `email`='$search'";
$sql = "SELECT * FROM employee;";
$result =mysqli_query($conn, $sql);

if($result) 
 {    
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
                <a href="edit.php?editRegistration_number='.$number.'"><i class="bx bx-edit icon 2x "style="font-size:20px ; color:yellow"></i></a> 
                <a href="delete.php?deleteRegistration_number='.$number.'"><i class="bx bx-trash icon 2x" style="font-size:20px ; color:purple"></i></a>
            </td>
            
          </tr>';
        }
    }}
?>

<form action="index.php" method="POST">  
<input type="text" name="search"><br>  
<input type="submit">
</form>   