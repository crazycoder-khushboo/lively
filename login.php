
<?php
include("inc/footer.php")
?>
<?php
session_start();
include_once("config.php");
if(isset($_POST['submit'])){

     $username = $_POST['username'];
     $password = $_POST['password'];
   
     
     

     $sql = " select * from  lively where username='$username' AND password='$password'";
     $query = mysqli_query($db,$sql);

     $row = mysqli_num_rows($query);
          if($row == 1){
               echo "login successful";
               $_SESSION['username'] = $username;
               $_SESSION['password'] = $password;
          
             
header('Location: dashboard.php');
          }else{
          echo "login failed";
               
          }     

          }


?>
<?php
include("inc/footer.php")
?>