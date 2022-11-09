<?php
$host ='localhost';
$username ='root';
$password ='';
$dbname ='test1';


$conn= mysqli_connect( 'localhost' , 'root' , '' , 'teilnehmer');


if (!$conn) {
    echo mysqli_connect_error("false Verbindung") .mysqli_connect_errno();
   #die("connection error:"'. mysqli_connect_error()');
    # code...
}
?>