<!DOCTYPE html>
<?php
//$dbname= "tg";
$conn = mysqli_connect("localhost", "root", "" , "tg");
if (!$conn)
{
die ("could not connect: " . mysql_error());
}
$sql_manufacture = "SELECT * FROM  manufacture ";
$sql_modal = "SELECT * FROM  modal ";
$sql_type = "SELECT * FROM  type";
$sql_year = "SELECT * FROM  year";
$sql_stock = "SELECT * FROM  stock";
$manufacture= mysqli_query ($conn, $sql_manufacture ) ; 
$model= mysqli_query ($conn, $sql_modal ) ; 
$type= mysqli_query ($conn, $sql_type) ; 
$year= mysqli_query ($conn, $sql_year) ; 
$stock= mysqli_query ($conn, $sql_stock );

//geting of numbers of rows for spacific email and apssword
$numberOfRow = mysqli_num_rows($said);
 
if ($numberOfRow>0){
 header('location:login_page.php');
}
else
{
    echo $conn -> error;
    echo   "login unsuccess";
} 
?>  