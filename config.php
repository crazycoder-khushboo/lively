<?php 
$db = mysqli_connect('localhost', 'root', '', 'demo');
if(!$db){
echo "Connection Failed".mysqli_connect_error();
}else{
    // echo " Connection Successfully";
}

?>