<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
    <style>
.last{
     min-width :344px;
}
.card-title{
    text-decoration: none;


}
a{
    text-decoration: none;
    color: blue;
}
body{
    background-color: gainsboro;
}
    </style>
</head>

<body>
<?php include 'db.php'; ?>
    <?php include '_header.php'; ?>
    

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2400x750/?nature,water" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x750/?nature" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x750/?coding,rain" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <h1 class="text-center my-4">Quora categories</h1>
        <div class="row my-4">

            <?php


$sql=" SELECT * FROM `categories`";
 $result=mysqli_query($conn,$sql);
  
while($row=mysqli_fetch_assoc($result)){

 //  echo $row['categories_id'];
 $id=$row['categories_id'];
  $cat=$row['categories_name'];

  $desc=$row['categories_description'];

  
 
  echo' <div class= "col-md-4 my-2">
  <div class="card" style="width: 18rem;">
     <img src="https://source.unsplash.com/500x400/? coding,python ' .$cat.'" class="card-img-top" alt="...">
     <div class="card-body">
         <h5 class="card-title"><a href="/aryan/forum.php/theradlist.php ?catid=' .$id. '">' .$cat. '</a></h5>
         <p class="card-text" >'.substr($desc ,0,90) .'....</p>
         <a href="/aryan/forum.php/theradlist.php?catid=' .$id. '" class="btn btn-primary">View Therads</a>
     </div>
     </div>
     </div>';
      
 
  

}
?>
        </div>
    </div>
    </div>
     <div class="last">
    <?php include '_footer.php';?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        
       
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
       $(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
      console.log("hello");
      $(".fixedNavbar").addClass("sticy");
    } else {
      $(".fixedNavbar").removeClass("sticy");
    }
  });
  
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        

    </script>
</body>

</html>