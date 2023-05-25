<?php

$servername="localhost";
$username="root";
$password="";
$dbname="cowindb";




$conn =  mysqli_connect($servername,$username,$password,$dbname) ;
if($conn)
{
   // echo ("connection ok");

}
else{
   echo "error connecting".mysqli_connect_error();
  
    }


	?>