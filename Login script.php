<?php
require_once "config.php";
if(isset($_COOKIE[$username])){
    header("location: index.html");
    exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
ini_set('session.gc_maxlifetime', 30*24*60*60);
ini_set('session.cookie_lifetime', 30*24*60*60);
$username = $password = "";
$user_err = $pass_err = "";

if(empty(trim($_POST["username"]))){
    $user_err = "Please enter username.";
} else{
    $username = trim($_POST["username"]);
}


if(empty(trim($_POST["password"]))){
    $pass_err = "Please enter your password.";
} else{
    $password = trim($_POST["password"]);
}


if(empty($username_err) && empty($password_err)){
        
        $sql = "SELECT id, username, discordUser, email,  password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){            
            mysqli_stmt_bind_param($stmt, "s", $param_username);                       
            $param_username = $username; 

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){                         
                    mysqli_stmt_bind_result($stmt, $id, $username,$discord,$email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){

                        if(password_verify($password, $hashed_password)){
                            
                            echo '<script>console.log('.json_encode($hashed_password).')</script>';
                            setcookie("username",$username,time()+ (30*24*60*60));
                            setcookie("discord",$discordUser,time()+ (30*24*60*60), "/");
                            setcookie("email",$email,time()+ (30*24*60*60), "/");

                            
                            header("location: index.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $username_err = "No account found with that username.";
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
<body class=text-center style="background-color:RGB(0,59,113); ">

<form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <img class="mb-4" src="https://trello-attachments.s3.amazonaws.com/5e9e6fdc520e1b611ee21c4a/5e9e701b1a515133975fac74/badf30ca6379893747dfbe252122932e/image.png" alt="" width="72" height="72">
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="" value="<?php echo $username; ?>">
      <span class="help-block"><?php echo $username_err; ?></span>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" class="form-control" name="password">
      <span class="help-block"><?php echo $password_err; ?></span>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <a class=mb-2 href=index.html>Go Back</a>
      <p class="mt-5 mb-3 text-muted"></p>
    </form>


    </body>


      <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  </html>





