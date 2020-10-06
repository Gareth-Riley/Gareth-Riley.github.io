<?php
require_once "config.php";
$username = $password = $discord = "";
$discord_err = $pass_err = "";

if(empty(trim($_POST["password"]))){
    $pass_err = "Please enter your password.";
} else{
    $password = trim($_POST["password"]);
}

$username = $_COOKIE["username"];
if(empty($discord_err) && empty($password_err)){
        
        $sql = "SELECT  password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){            
            mysqli_stmt_bind_param($stmt, "s", $param_username);                       
            $param_username = $username; 

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){                         
                    mysqli_stmt_bind_result($stmt, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){

                        if(password_verify($password, $hashed_password)){
                        	
                            
                            $sql = "UPDATE users SET discordUser=? WHERE username=?";
         
        					if($stmt = mysqli_prepare($link, $sql)){
            
            				mysqli_stmt_bind_param($stmt, "ss", $param_discord, $param_username);
            				$param_discord=$discord;
            				$param_username = $username;
            
          
            				
				            
				            // Attempt to execute the prepared statement
				            if(mysqli_stmt_execute($stmt)){
				                // Redirect to login page
				                header("location: index.php");
				            } else{
				                echo "Something went wrong. Please try again later.";
				            }


                            
                            header("location: index.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $username_err = "Not logged in.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>

<style>
html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}
.form-login {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-login .checkbox {
  font-weight: 400;
}
.form-login .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-login .form-control:focus {
  z-index: 2;
}
.form-login input[type="username"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-login input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

<body>

  <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color: #00407a;">
    <div class="container">
      <a class="navbar-brand " href="index.html">Augmented Sociality</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            
              <li class="nav-item">
            <a class="nav-link" href="New Start.html">New to AR?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="News.html">News</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="Teams.html">Teams</a>
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
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="login.html">Login</a>
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


<form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Set Discord Id</button>
      <p class="mt-5 mb-3 text-muted"></p>
    </form>
<form class="form-login" action="Email.php" method="get">
  <label for="Email">Email Adress:</label>
  <input type="text" id="Email" name="Email"><br><br>
    <input type="submit" value="Submit">
</form>
  </div>


</body>



</html>