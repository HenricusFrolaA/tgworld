OCTYPE html>
<?php
$type_id= $_POST["type_id"];
$price_id= $_POST["price_id"];
$conn =mysqli_connect("localhost", "root", "" , "tg");
if (!$conn)
{
die ("could not connect: " . mysql_error());
}

$file =	$_FILES['file'];
		$fileName =	$_FILES['file']['name'];
		$fileSize =	$_FILES['file']['size'];
		$fileTmp =	$_FILES['file']['tmp_name'];
		$fileError=	$_FILES['file']['error'];
		$fileType =	$_FILES['file']['type'];
		$fileExt=	explode('.', $fileName);
		$fileActualExt=strtolower(end($fileExt));
		$allowed =	array('jpg','npg','jpeg','png');

if (in_array($fileActualExt, $allowed)) {
	if ($fileError===0) {
			$filenameNew=uniqid('',true).".".$fileActualExt;
			$fileDestination = 'images/'.$filenameNew;
			//query of upload proposal file 
			$sql = "INSERT INTO stock (  type_id, price_id,image )VALUES (   '$type_id' , '$price_id' ,'$filenameNew')";
            $result = mysqli_query($conn,$sql)or die(mysqli_error($con));
			if ($result) {
				move_uploaded_file($fileTmp, $fileDestination);
				header('location:car_list.php');
			}	else
            {
                echo "record is noadded". mysqli_error($conn);
            } 
	} else {

		echo "upload file feiled";
	}
		
}
else {
			$filenameNew="car_vs.png";
			$sql = "INSERT INTO stock (  type_id, price_id,image )VALUES (   '$type_id' , '$price_id' ,'$filenameNew')";
            $result = mysqli_query($conn,$sql)or die(mysqli_error($con));
			if ($result) {
				header('location:car_list.php');
			}	else
            {
                echo "record is noadded". mysqli_error($conn);
            } 
	}


// $sql = "INSERT INTO stock (  type_id, price_id )
// VALUES (   '$type_id' , '$price_id' )";
// $my= mysqli_query($conn, $sql);
// if ($my)
// {
    
//     // echo "record added";  
//     header('location:car_list.php');
//     saveImageToDatabase($imageurl);  


// }
// else
// {
//     echo "record is noadded". mysqli_error($conn);
// } 
?>  
