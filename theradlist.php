<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>theradlist</title>
    <style>
    #ques {
        min-height: 430px;

    }

    
     
    </style>
</head>

<body>

    <?php include 'db.php'; ?>
    <?php include '_header.php'; ?>

    <?php 
    $id = $_GET['catid'];
     
    $sql=" SELECT * FROM `categories` WHERE categories_id = $id";

 $result=mysqli_query($conn,$sql);
  
while($row=mysqli_fetch_assoc($result)){

 
  $catname =$row['categories_name'];

  $catdesc=$row['categories_description'];

  

 

}
  ?>
    
    <?php 
     $showalert=false; 
$method=$_SERVER['REQUEST_METHOD'];
if($method=='POST'){
     $th_title=$_POST['title'];
     $th_desc=$_POST['desc'];
     $th_title=str_replace("<", "&lt;",$th_title);
     $th_title=str_replace(">", "&lt;",$th_title);
    
     $th_desc=str_replace("<", "&lt;",$th_desc);
     $th_desc=str_replace(">", "&lt;",$th_desc);
      
      $sno=$_POST['sno'];
       
     $sql="INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_cat_id`, `thread_user_id`, `times_id`) VALUES ('$th_title','$th_desc','$id', '$sno', current_timestamp());";

     $result=mysqli_query($conn,$sql);
     $showalert=true;
     if($showalert){
          echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your therad has been added please wait community  to respond!
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
     }
}
  
 ?>



    <div class="container my-4" id="ques">
        <div class="a">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to <?php  echo $catname ;?> forums</h1>
                <p class="lead"><?php echo $catdesc;?></p>
                <hr class="my-4">
                <p style="color:red ;font-size: 23px"><u>Rules for forums </u>:<br></p>
                <p>
                    No Spam / Advertising / Self-promote in the forums.Do not post copyright-infringing material.Do not
                    post “offensive” posts, links or images.
                    Do not cross post questions.
                    Do not PM users asking for help.
                    Remain respectful of other members at all times.
                </p>

                <p class="lead">
                    <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>

        </div>
    </div>
     <?php
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){
 echo  ' <div class="container">
        <h1 class=" py-2">Start a Discussion </h1>
        <form action=" '. $_SERVER ["REQUEST_URI"] .'" method="post">
            <div class="form-group">

                <label for="exampleInputEmail1">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                    placeholder="">
                <small id="emailHelp" class="form-text text-muted">keep your title as short and crisp as
                    possible</small>
            </div>
            <input type="hidden" name="sno" value=" '.$_SESSION['sno'] .' ">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ellaborate your concern</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>';
      }
      else{
        echo'  <div class="container">
       <h1 class=" py-2">Start a Discussion </h1>
        <p class="lead">You are  not logged in. please login to be  able to start  a Discussion</p>
    </div>
    ';

      }
?>

    <div class="container" id="ques">

         <h1 class=" py-2">Browse Question</h1>

         <?php 
         $id=$_GET['catid'];
     
          $sql=" SELECT * FROM `threads`WHERE thread_cat_id=$id";

          $result=mysqli_query($conn,$sql);
          $noresult=true;
   
          while($row=mysqli_fetch_assoc($result)){
          $noresult=false;
 
 
           $id =$row['thread_id'];
           $title =$row['thread_title'];
         
           $desc=$row['thread_description'];
           $time_id=$row['times_id'];
           $thread_user_id =$row['thread_user_id'];
           $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
           $result2 = mysqli_query($conn, $sql2);
           $row2 = mysqli_fetch_assoc($result2);   
     


       echo 
       ' <div class="d-flex my-4" >

            <div class="flex-shrink-0 my-4">
             <img src="https://randomuser.me/api/portraits/men/51.jpg"
              alt="..." width="60px" height="60px">
            </div>
        <div class="flex-grow-1 ms-3 my-4">
       
      <h5 class="media-body"> <a  class="text-dark"href="/aryan/forum.php/thread.php?threadid='.$id. '">'.$title.'</a></h5>
      '.$desc.'</div>'.'<p class="font-weight-bold my-4">Asked by: '.$row2['user_email'].' at  '.$time_id.'</p>.
     
    </div>
 ';

}
if($noresult){
   echo 
   '<div class="jumbotron jumbotron-fluid">
      <div class="container">
         <h1 class="display-4">No Threads  Found</h1>
         <p class="lead">Be the first person to ask a question</p>
     </div>
</div>

';
 
}


  ?>


<?php include '_footer.php';?>
       
        

        <!-- Optional JavaScript; choose one of the two! -->


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>