<?php
include 'db.php';
 
session_start();
 
  
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Quora</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/aryan/forum.php/_index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/aryan/forum.php/About.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Top Categories
        </a>

        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
         $sql="SELECT categories_name,categories_id  FROM `categories` LIMIT 3";
         $result=mysqli_query($conn,$sql);
         while($row=mysqli_fetch_assoc($result)){
           echo '<a class="dropdown-item" href="/aryan/forum.php/theradlist.php?catid='.$row['categories_id'].'">'.$row['categories_name'].' </a>';
         
         }
        
         
       
 
     echo '</ul>
  
      <li class="nav-item">

         <a class="nav-link" href="/aryan/forum.php/contact.php">contact</a>
      </li>
    </ul>';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){
      echo ' <form class="d-flex " method ="get" action="/aryan/forum.php/search.php">
   <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success"  type="submit">Search</button>
    <p class="text-light my-0 mx-2"> Welcome '.$_SESSION['useremail'].' </p>
   <a href="/aryan/forum.php/_logout.php" class ="btn btn-outline-success ml-2"> Logout</a>
 

  </form>';
 
    }
      else{
        echo ' <form class="d-flex ">;
   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
       <button class=" btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#login_model">login</button>
        <button class=" btn btn-outline-success mx-1" data-bs-toggle="modal" data-bs-target="#signup_model">singup</button>'; }
    
  echo '</div>
</div>
</nav>';
require 'login_model.php';
require 'singup_model.php'; 
if(isset( $_GET['signupsuccess']) &&  $_GET['signupsuccess'] =="true"){
   echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
   <strong>success!</strong>  You are login
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
}
?>




