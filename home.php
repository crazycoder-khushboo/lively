<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lively</title>
</head>
<style>
    p{
     
        text-decoration: solid;
        font-size: 14px;
        font-family: 'Times New Roman', Times, serif;
        text-align:center;
    }
    .container{
        background-color: antiquewhite;
        margin-bottom:50px;
        


    }
    h1{
        color:blue;
        text-align:center;
        font-family:Georgia, serif;
    }
    h3{
      text-decoration: underline;
    }
    h2{
      text-align:center;
      color:blue;
    }


div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: left;
  
}
div.li{
  display:flex;
  margin-top:10px;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
    margin-bottom:2px;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}



.fa {
  padding: 30px;
  font-size: 30px;
  width: 30px;
  text-align:center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>

<body>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
include("inc/header.php")
?>
</html>
      <div class="container-fluid">
        <h1>LIVELY</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="./images/ima1.jpg.png" alt="Color" style="width:100%; height: auto;">
            </div>
      
            <div class="item">
              <img src="./images/ima2.jpg.png" alt="Spark" style="width:100%; height: auto;">
            </div>
          
            <div class="item">
              <img src="./images/ima3.jpg.png" alt="Life" style="width:100%; height: auto;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
     

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img4.jpg">
      <img src="./images/img4.jpg" alt="HOME" width="600" height="400">
    </a>
    <h2>HOME</h2>
    <div class="desc">At Lively, we celebrate the beauty and artistry of painting and handmade crafts. Our platform is a haven for artists, crafters, and art enthusiasts to explore, learn, and showcase their talents. Whether you're a seasoned artist or just starting your creative journey, you've come to the right place.</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img5.png">
      <img src="./images/img5.png" alt="ABOUT US" width="600" height="400">
    </a>
    <h2>ABOUT US</h2>
    <div class="desc">Discover a world of inspiration through our diverse collection of paintings and handmade crafts. From stunning oil paintings to intricate sculptures, we curate a wide range of artworks that showcase the unique perspectives and creativity of talented individuals.
    We believe that art is a universal language that brings people together, and we encourage collaboration, dialogue, and the exchange of ideas. 
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img6.jpg">
      <img src="./images/img6.jpg" alt="EVENTS" width="600" height="400">
    </a>
    <h2>EVENTS</h2>
    <div class="desc">If you're an artist or craftsperson yourself, we invite you to showcase your creations on our platform. Exhibit your masterpieces, promote your handmade products, and connect with potential buyers and art enthusiasts from around the world.
          </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img8.jpg">
      <img src="./images/img8.jpg" alt="PRIZES" width="600" height="400">
    </a>
    <h2>PRIZES</h2>
    <div class="desc">For those seeking to connect with fellow artists and crafters, our vibrant community provides a supportive and collaborative space. Engage in discussions, share your work, and seek feedback from like-minded individuals who share your passion for art and craftsmanship.
          </div>
  </div>
</div>
<div class="clearfix"></div>
<?php
include("inc/footer.php")
?>
</body>
</html>