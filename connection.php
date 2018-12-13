<?php
//mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db")
$link = mysqli_connect("localhost", "id7047848_root", "12345", "id7047848_carshare");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>
