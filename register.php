<?php
{
include('connect.php');


$username = $_POST["username"];
$password = $_POST["password"];

// posting data to server

$sql1 = ("SELECT * FROM lightapp");
$result = mysqli_query($conn, $sql1);

while ($row = mysqli_fetch_array($result)) {

    $noname = $row['username'] ;
}

if ($noname == $username )
{
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Email Alredy Exist please Try another");';
        echo 'window.location.href = "./index.html";';
        echo '</script>';
    }
}
else {

    $sql2 = "INSERT INTO lightapp VALUES ('$username','$password')";

if (mysqli_query($conn, $sql2)) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Register Success please Login Now");';
    echo 'window.location.href = "./login.html";';
    echo '</script>';
}
else {
    echo "ERROR: Hush! Sorry $sql2. "
        . mysqli_error($conn);
}
}
       
// Close connection

 mysqli_close($conn);
}

?>
