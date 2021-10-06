<?php
require_once "config.php";
$nt_user = false;
$u_taken = false;
$nt_insert = false;
$nt_match = false;
$ps_blank = false;
$ps_less = false;
$e_taken = false;
$username = $email = $password = $confirm_passwoed = "";
$username_err = $email_err = $password_err = $confirm_passwoed_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    // if(empty(trim($_POST["username"]))){
    //     $username_err = "Username cannot be blank.";

    // }

    // else{
    //     $sql = "SELECT id FROM users WHERE username = ?";
    //     $stmt = mysqli_prepare($conn, $sql);

    //     if($stmt){
    //         mysqli_stmt_bind_param($stmt, "s", $param_username);

    //         $param_username = trim($_POST['username']);

    //         if(mysqli_stmt_execute($stmt)){
    //             mysqli_stmt_store_result($stmt);

    //              $username = trim($_POST['username']);

               
    //         }
    //         else{
    //             echo "Something went wrong";
    //         }
    //     }
    // }

    if(empty(trim($_POST["username"]))){
        $email_err = "username cannot be blank.";
         $nt_user = true;
        
    }

    else{
        $sql = "SELECT id FROM users WHERE Name = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if($stmt){
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST['username']);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1){
                    $username_err ="This email is already taken";
                    $u_taken = true;

                }
                else{
                    $username = trim($_POST['username']);

                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }


    // mysqli_stmt_close($stmt);


    if(empty(trim($_POST["email"]))){
        $email_err = "Email cannot be blank.";
         $nt_insert = true;
        
    }

    else{
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if($stmt){
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = trim($_POST['email']);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1){
                    $email_err ="This email is already taken";
                    $e_taken = true;

                }
                else{
                    $email = trim($_POST['email']);

                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    // mysqli_stmt_close($stmt);

    if(empty(trim($_POST['password']))){
        $password_err = "Password cannot be blank";
        $ps_blank = true;
    }
    else if(strlen(trim($_POST['password'])) < 7){
        $password_err = "Password cannot be less than 7 characters.";
        $ps_less = true;
    }
    else{
        $password = trim($_POST['password']);
    }

    if(trim($_POST['password']) != trim($_POST['confirm_password'])){
        $password_err = "Passwords should be match.";
        $nt_match = true;
    }

    if(empty($username_err)&& empty($email_err) && empty($password_err) && empty($confirm_passwoed_err))
    {
        $sql = "INSERT INTO users (Name, Email, Password) VALUES (?, ?, ?);";
        $stmt = mysqli_prepare($conn, $sql);

        if($stmt){
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

            $param_username = $username;
            $param_email = $email;
            $param_password= password_hash($password, PASSWORD_DEFAULT);
        

        if(mysqli_stmt_execute($stmt)){
            header("location: login.php");
        }

        else{
        
        }
    }

    // mysqli_stmt_close($stmt);

    }

    mysqli_close($conn);

} 
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onlineenjoyment.com</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


</head>

<body style = "font-family: 'Roboto', sans-serif; background: #d7e5e7;">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">OnlineEnjoyment</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse respon" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log in</a>
          </li>
        </ul>
    </div>
    </div>
  </nav>
        <div class="container" style = "margin: 214px auto;width: 47%; background-image: url('signup.webp'); background-size: 103%">
            <h1>Create An Account</h1>

            <?php
             if($nt_user == true){
               echo "<p style = 'color: #9f000b;'>Username cannot be blank</p>";
             }
             if($u_taken == true){
               echo "<p style = 'color: #9f000b;'>This Username is already resistered.</p>";
             }

             if($nt_insert == true){
                 echo "<p style = 'color: #9f000b;'>Email cannot be blank.</p>";
             }
             if($e_taken == true){
                 echo "<p style = 'color: #9f000b;'>Email is already taken.</p>";
             }
             if($nt_match == true){
                 echo "<p style = 'color: #9f000b;'>Password should be match.</p>";
             }
             if($ps_blank == true){
                 echo "<p style = 'color: #9f000b;'>Password cannot be blank.</p>";
             }
             if($ps_less == true){
                 echo "<p style = 'color: #9f000b;'>Password should greater than 7 characters.</p>";
             }
            ?>

            <form action="" method = "post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Full Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
            </div>
            <button style="background: #50C878; color: white ;" class="btn">Sign Up</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>