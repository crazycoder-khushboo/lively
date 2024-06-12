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
  background-image:url(./images/con1.jpg);
  padding: 20px;

}
form {
  padding: 1em;
  background-color:;
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
<?php
include("inc/header.php")
?>
<body>
<div class="container">
<h3 style=text-align:center;font-size:30px;color:white;>Contact Us</h3>
  <form action="register.php" Method ="POST"enctype="multipart/form-data">
    <label for="fname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone ..">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:100px"></textarea>
    <label for="image">Image</label>
    <input type="file" id="image"name="image"><br><br>
    <label for="date">Date</label>
    <input type="date" name="date" >
    <input type="submit" value="submit" name="submit">
   
  </form>
</div>
</body>
<?php
include("inc/footer.php")
?>
</html>