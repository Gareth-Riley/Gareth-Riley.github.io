<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.html");
    exit;
}

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

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
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["discordUser"] = $discord;
                            $_SESSION["email"] = $email;                          
                            
                            header("location: index.html");
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