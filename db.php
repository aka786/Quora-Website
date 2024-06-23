<?php
$servername="localhost";  
$username="root";
 $password="";
  $database="idiscuss";
   $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
       die  ( " you are not connted to a database ");
          
    }
 else{
      // echo " database is  connted";
      
 }
?>