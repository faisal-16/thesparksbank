<?php
 $dbServername="localhost";
 $dbUsername="root";
 $dbPassword="";
 $dbName="bank_system";

 $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
 
 if(!$conn){
    die("Could not connect to the database due to the following error - ".mysqli_connect_error());
}
?>