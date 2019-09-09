<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if (!empty($name) || !empty($email) || !empty($message)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "form";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $query = "INSERT Into contact form (name,email,message) values('$name','$email','$message')";
     $result = mysqli_query($conn,$query);
    if ($result) {
        echo "feedback sent..."; 
        header('Location:index.php');
      
     } else {
      echo "sorry feedback not sent!!";
        header('Location:index.php');
     }
     mysqli_close($conn);
    }
} else {
 echo "All field are required";
 die();
}
?>