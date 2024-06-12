<?php include("config.php"); 
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM form WHERE id=$id";
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
  }
  }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:blue;
  color: white;
  padding: 15px 20px;
  border: none;
  border-radius:20px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:purple;
}

.container {
  border-radius: 5px;
  background-color:#4d94ff;
  padding: 20px;

}
form {
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin-top: 2rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}

label {
    float: left;
    width: 100px;
}


</style>
</head>
<body>
<img src="">
<div class="container">
<h3 style=text-align:center;>Contact Us</h3>
  <form action="" Method ="POST"enctype="multipart/form-data">
    <label for="fname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name.." value="<?php echo $row['firstname']; ?>">

    <label for="lname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name.."  value="<?php echo $row['lastname']; ?>">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone .."  value="<?php echo $row['phone']; ?>">

    <label for="message">Message</label>
    <input type="message" name="message" placeholder="Write something.." style="height:200px"  value="<?php echo $row['message']; ?>"></br>
    <label for="image">Image</label>
    <input type="file" id="image" name="image" value="<?php echo $row['image']; ?>">
    <label for="date">Date</label>
    <input type="date" id="date" name="date" value="<?php echo $row['date']; ?>">
    <input type="submit" value="submit" name="submit">
   
  </form>
</div>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $message = $_POST['message'];
   $phone =  $_POST['phone'];
   $date =  $_POST['date'];
   $file_name="";
   if(!empty($_FILES['image']['name'])){
     $file_name = $_FILES['image']['name'];
     $temp_name = $_FILES['image']['tmp_name'];
     move_uploaded_file($temp_name,"../upload/".$file_name);
     }

    $query = "UPDATE `form` SET  `firstname` = '$firstname', `lastname` = '$lastname', `message` = '$message', `phone` = '$phone', `image` = '$file_name',`date` = '$date' WHERE `id` = $id";
    if(mysqli_query($db,$query)){
    header('location:text.php');
    }
  }
    ?>