<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  padding-top: 56px;
}
.carousel-item {
  height: 65vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.portfolio-item {
  margin-bottom: 30px;
}
</style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color: #00407a;">
    <div class="container">
      <a class="navbar-brand" id=LoginButton href="Login script.php">Login</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          <li class="nav-item">
            <a class="nav-link" href="News.html">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Projects
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="Project Page.html">Project 1</a>
              <a class="dropdown-item" href="Project Page.html">Project 2</a>
              <a class="dropdown-item" href="Project Page.html">Project 3</a>
              <a class="dropdown-item" href="Project Page.html">Project 4</a>
            </div>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="New Start.html">New to AR?</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/3432fea5a77adaf90794cedcb8adb14b/Announcement_now_live.jpeg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>The wireframe is now live!</h3>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/9e541392afc484bcb2e4aba1bbd775db/pexels-photo-3183150.jpeg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Project page is now live!</h3>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/9a5af63db7fcdf9c79cabc2881431daa/pexels-photo-1416530.jpeg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Contact us page is now live!</h3>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/0377c1dfc6d57cc9f658455d5e682aff/man-coffee-cup-pen.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>News page is now live!</h3>
            <p></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  <!-- Page Content -->
  <div class="container">
   
    <!-- /.row -->
    <!-- Portfolio Section -->
    <br>
    <br>
    <br>
    <br>
    <h2 style="text-align: center;">Recent news</h2>
    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/1d9f2e913117b8252d7a4d6970854b37/Science_potatobag-902261236.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">How to See the World's Reflection From a Bag of Chips</a>
            </h4>
            <p class="card-text">Computer scientists reconstructed the image of a whole room using the reflection from a snack package. It's useful for AR/VR research—and possibly spying.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/73214fb8aad672e7b54410962d079a07/pexels-photo-373905.jpeg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Guide to Virtual Reality</a>
            </h4>
            <p class="card-text">Everything you ever wanted to know about VR headsets, Oculus, Vive, and simulator sickness</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/43bcf129d71eaadbc981747506a9b144/culture_vr_1162858634.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Want to Know the Real Future of AR/VR? Ask Their Devs</a>
            </h4>
            <p class="card-text">A new survey of 900 active devs provides some surprising clarity into the technology's constraints.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/10730c7dfb18223ef1aef0fdc944f9de/Gear-Apple_new-ipad-pro-performance_03182020.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">A Modest iPad Update Holds the Key to Apple's AR Future</a>
            </h4>
            <p class="card-text">There's a lidar scanner on Apple's newest iPad, but it isn't really for the iPad at all.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5eb6431295df897df5542c76/bfc325af042af88934f78ad95ca3e85c/Transpo-highway-1161665446.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Augmented Reality From the Driver's Seat, and More Car News This Week</a>
            </h4>
            <p class="card-text">Plus: Retailers aim to improve delivery performance, and Airbus displays a model of a new blended-wing plane</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Recent News 6</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    
    <hr>
 </div>
    
  <!-- Footer -->
 <footer class="py-5 " style="background-color: #00407a;">
    <div class="container">
      <p class="m-0 text-center text-white"></p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) c_end = document.cookie.length;
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}
    var username = getCookie("username");
    if (document.cookie.indexOf('username')!=-1)
    {
      console.log("Success");
      console.log(username);
      console.log(document.cookie)
    document.getElementById("LoginButton").innerHTML="Currently logged in as: "+username;
  }
  </script>
</body>
</html>