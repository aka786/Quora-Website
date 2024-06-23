<?php 
include 'db.php';
 
  
  
  if($_SERVER['REQUEST_METHOD']  ==  'POST')
       {
           $username=$_POST['username'];
            $email=$_POST['email'];
            $suggestion=$_POST['suggestion'];
            

             $sql="INSERT INTO `contact` (`username`, `email`, `suggestion`, `time`) VALUES ('{$username}', '{$email} ', '{$suggestion}', current_timestamp())";
             
         $result=mysqli_query($conn,$sql);
          
         if($result){
            //    echo " your  record is updated sucessfully";
               echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>success!</strong>  has been successfully submited
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
               <span aria-hidden="true"></span>
               </button>
            
             </div>';
            }
            else if(!$result){
               
                    //   echo " your  record is  not updated  sucessfully -->".mysqli_error($conn);
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>fail!</strong>  You are not able to submited
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"></span>
                      </button>
                    
                    </div>';
                       
                     
            }
          
            

       }
     
  
  ?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>contact </title>
     <style>
         h1{
              text-align:center;
               
         }
          .container{       
               min-height: 87vh;
                
          }
          .d{
            margin-left: 550px;
          }
          body{
            background-color: seashell;
          }
        
     </style>
  </head>
  <body>

  
    <?php include '_header.php'; ?>
    <div class="container">
    <h1>contact us</h1>
    
    <div class="d">
   
    <div class="mb-3 col-md-5 ">
    <form action="/aryan/forum.php/contact.php" method="POST">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="username" name="username" >
</div>
<div class="mb-3  col-md-5 ">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name ="email">
</div>
<div class="mb-3 col-md-5 ">
  <label for="exampleFormControlTextarea1" class="form-label">Your suggestion</label>
  <textarea class="form-control" id="suggestion" name="suggestion" rows="3"></textarea>
</div>
<button type="submit" id="submit" class="btn btn-success">Submite</button>
</form>
    </div>
    </div>
    <?php include '_footer.php';?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>