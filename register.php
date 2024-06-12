<?php
include('config.php');
if (isset($_POST['submit'])) {
 $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $message = $_POST['message'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $file_name = "";
  if(!empty($_FILES['image']['name'])){
    $file_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($temp_name,"../upload/".$file_name);
    }
$query = "INSERT INTO `form` (`firstname`,`lastname`,`message` ,`phone`,`image`, `date`) VALUES 
  ('$firstname','$lastname','$message' ,'$phone','$file_name','$date')";
  
 if(mysqli_query($db, $query)){
    echo "<script>swal('Success ', 'Contcat-Us Successfully Inserted..', 'success').then(function(){ window.location.href='contact.php';})</script>";
  }else{
    echo "<script>swal('Failed ', 'Insertion Failed...', 'error')</script>";
  }
  } 



?>
<div class="table-responsive">
<table class="table table-hover table_new">
<style>
    button{
     background-color:red;
      radius:4px;
      color:white;
    }
table, th, td {
  border: 1px solid black;
  background-color:white;
}
</style>
<thead>
<tr>
<th>Sno.</th>
<th>FirstName</th>
<th>LastName</th>
<th>Message</th>
<th>Phone</th>
<th>Image</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<?php
$result = mysqli_query($db, "SELECT * FROM form");
if (mysqli_num_rows($result) >0) {
  $i=0;
while($row = mysqli_fetch_assoc($result)){
  $i++;
?>
<tr>
<td><?php echo $i;?></td>

<td><?php if(!empty($row['firstname'])){ echo $row['firstname']; }  ?></td>
<td><?php if(!empty($row['lastname'])){ echo $row['lastname']; }  ?></td>
<td><?php if(!empty($row['message'])){ echo $row['message']; }  ?></td>
<td><?php if(!empty($row['phone'])){ echo $row['phone']; }  ?></td>
<td><?php if(!empty($row['image'])){ echo $row['image']; }  ?></td>
<td><?php if(!empty($row['date'])){ echo $row['date']; }  ?></td>
<td><button class="btn btn-primary"><a href="update.php?id=<?php echo $row['id'];?>" class="text-white">Edit</a></button>
  <button class="btn btn-danger"><a href="?delete_text=<?php echo $row['id'];?>" class="text-white">Delete</a></button></td>
</tr>
<?php
}
}
?>
</div>


<?php

if(isset($_GET['delete_text']) && !empty($_GET['delete_text'])){
    $id=$_GET['delete_text'];
    $sql = "DELETE  FROM  form WHERE id=$id";
    if(mysqli_query($db, $sql)){
    //  header('location:form.php');
    //   echo "<script>swal('Success ', 'blog Has Been Deleted...', 'success').then(function(){ window.location.href='blog.php';});</script>";
    // }else{                                                                                       
    //   echo "<script>swal('Failed ', 'Deletion Failed...', 'error')</script>";
      
    }
  
  }
?>
