<?php

include('connect.php');

$uname = $_POST["username"];
$pass = $_POST["password"];


$result = mysqli_query($conn, "SELECT password FROM lightapp WHERE username='$uname'");

if ($row = mysqli_fetch_array($result)) {
    $password = $row['password'];

if ( $password == $pass ) {

        echo '<script type="text/javascript">'; 
        echo 'alert("Login Success");';
        echo 'window.location.href = "login.html";';
        echo '</script>';
        
        }
        else 
            { 
                echo '<script type="text/javascript">'; 
                echo 'alert("Enter Valid password Login Failed");';
                echo 'window.location.href = "login.html";';
                echo '</script>';  
            }
    
}
else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Enter Valid Username To Login");';
    echo 'window.location.href = "login.html";';
    echo '</script>';
}



mysqli_close($conn);
    


?>




}
    else 