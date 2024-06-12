 <?php
include('config.php');
if (isset($_POST['submit'])) {
 $email = $_POST['email'];
 
$query = "INSERT INTO `emails` (`email`) VALUES  ('$email')";

  
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
<th>email</th>
<th>Action</th>
</tr>
</thead>
<?php
$result = mysqli_query($db, "SELECT * FROM emails");
if (mysqli_num_rows($result) >0) {
  $i=0;
while($row = mysqli_fetch_assoc($result)){
  $i++;
?>
<tr>
<td><?php echo $i;?></td>

<td><?php if(!empty($row['email'])){ echo $row['email']; }  ?></td>
<td><button class="btn btn-primary"><a href="email.php?id=<?php echo $row['id'];?>" class="text-white">Edit</a></button>
  <button class="btn btn-danger"><a href="?delete_text=<?php echo $row['id'];?>" class="text-white">Delete</a></button></td>
</tr>
<?php
}
}
?>

<?php

if(isset($_GET['delete_text']) && !empty($_GET['delete_text'])){
    $id=$_GET['delete_text'];
    $sql = "DELETE  FROM  emails WHERE id=$id";
    if(mysqli_query($db, $sql)){
    }
}
?>