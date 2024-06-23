 <?php
$showerror="false";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
     $user_email=$_POST['singup'];
     $pass=$_POST['password'];
    $cpass=$_POST['cPassword'];
     
      $existsql="select * from  `users` where user_email ='$user_email'";
       $result=mysqli_query($conn,$existsql);
        $numrows=mysqli_num_rows($result);
         if($numrows>0){
              $showerror ="Email already in use";
               
         }
 else{
            if($pass=$cpass){
                    $hash=password_hash($pass,PASSWORD_DEFAULT);
                    $sql="INSERT INTO `users` (`user_email`, `user_pass`, `time`) VALUES ('$user_email', '$hash', current_timestamp())";
                    $result=mysqli_query($conn,$sql);
                     if($result){
                          $showalert=true;
                           header("Location:/aryan/forum.php/_index.php?signupsuccess=true");
                            exit();

                        }
             }
                            else{
                                   $showerror="password do not match";
                                }
}
      header("Location:/aryan/forum.php/_index.php?signupsuccess=false&error=$showerror");
      
}





?>