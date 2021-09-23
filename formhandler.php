<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
  
    $conn = mysqli_connect("localhost","root","","contact");
    
    if(isset($_POST['submit'])){
        if(!empty($name) && !empty($email) && !empty($number) && !empty($message) ){
            $query = "INSERT INTO test (name,email,number,message) VALUES ('$name','$email','$number','$message')";
            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if($run){
            header("Location:contact.php?msg=Done"); 
            }
            else{
                echo "<script > alert('Please Try Again');</script>";
            }
        }
        else{
            echo "<script > alert('All fields required');</script>";
        }
    }
?>
</body>
</html>

