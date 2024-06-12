<!DOCTYPE html> 
<html> 
    <head>
<style>
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 10px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  margin-bottom:8px;
  margin-left:10px;
  margin-right:40px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1000px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
</style>
    </head>
    <?php
include("inc/header.php")
?>
<body> 
<h1>GALLARY</h1>

<video width="500" controls>
  <source src="./images/video1.mp4" type="video/mp4">
  <source src="./images/video1.ogg" type="video/ogg"> 
 
</video>

<video width="500" controls>
  <source src="./images/video2.mp4" type="video/mp4">
  <source src="./images/video2.ogg" type="video/ogg"> 
  
</video>


<div class="row">
  <div class="column">
    <img src="./images/gallary1.jpg" height="500px" width="500px">
    <img src="./images/gallary2.jpeg" height="500px" width="500px">
    <img src="./images/gallary3.jpg" height="500px" width="500px">
    <img src="./images/g4.jpg" height="500px" width="500px">
    <img src="./images/g5.jpg" height="500px" width="500px">
    <img src="./images/g6.jpg" height="500px" width="500px">
    <img src="./images/g7.jpg" height="500px" width="500px">
  </div>
  <div class="column">
    <img src="./images/g8.jpg" height="500px" width="500px">
    <img src="./images/g9.jpg" height="500px" width="500px">
    <img src="./images/g10.jpg" height="500px" width="500px">
    <img src="./images/g11.jpg" height="500px" width="500px">
    <img src="./images/g12.jpg" height="500px" width="500px">
    <img src="./images/g7.jpg" height="500px" width="500px">
     <img src="./images/g11.jpg" height="500px" width="500px">
  </div>
  <div class="column">
    <img src="./images/ga1.jpg" width="700px" height="500px">
    <img src="./images/ga2.jpeg" height="500px" width="500px">
    <img src="./images/ga3.jpg" height="500px" width="500px">
    <img src="./images/ga7.jpeg" height="500px" width="500px">
    <img src="./images/ga5.jpg" height="500px" width="500px">
    <img src="./images/ga9.png" height="500px" width="500px">
    <img src="./images/ga3.jpg" height="500px" width="500px">
  </div>
  <div class="column">
    <img src="./images/ga1.jpg" width="700px" height="500px">
    <img src="./images/ga2.jpeg" height="500px" width="500px">
    <img src="./images/ga3.jpg" height="500px" width="500px">
    <img src="./images/ga7.jpeg" height="500px" width="500px">
    <img src="./images/ga5.jpg" height="500px" width="500px">
    <img src="./images/ga9.png" height="500px" width="500px">
    <img src="./images/ga3.jpg" height="500px" width="500px">
  </div>
</div>
<?php
include("inc/footer.php")
?>
</body> 
</html>
