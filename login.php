 <?php
//This is for login.

session_start();

// if(isset($_SESSION['email'])){
//     header("location: homepage.php");
//     exit;
// }

require_once "config.php";
$e_blank = false;
$nt_user = false;
$bl_password = false;
$email = $password = "";
$err = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password']))){
        $err = "Please enter Email and Password";
        $e_blank = true;
    }

    else{
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }


    if(empty($err)){
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = $email;
        $param_password = $password;

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                      if(password_verify($password, $hashed_password))
                        {
                            session_start();
                            $_SESSION["email"]=$email;
                            $_SESSION["id"]=$id;
                            $_SESSION["loggedin"]= true;

                            header("location: homepage.php");
                        }
                      else
                      {
                        $bl_password == true;
                      }
                    }
            
                }

                else{
                  $nt_user = true;
                }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> onlineenjoyment.com </title>
    <link rel="stylesheet" href="login.css">
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
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/homepage.html">Home</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="/index.html">Music</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="/mov.html">Movie</a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" href="singup.php">Sign Up</a>
          </li>
          </li>

        </ul>

      </div>
    </div>
  </nav>
    <div class="wrapper-container" style="background-image: url('signup.webp'); background-size: 103%">
        <div>
            <h1>Log in here:-</h1>
            <?php
            if($e_blank == true){
                echo "<p style = 'color: #9f000b;'>Please enter your email and password both.</p>";
            }
            if($nt_user == true){
                echo "<p style = 'color: #9f000b;'>Account not found.</p>";
            }
            if($bl_password == true){
                echo "<p style = 'color: #9f000b;'>incorrect password.</p>";
               
            }
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" style = "border-radius: 4px; padding: 14px 16px;">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" style = "border-radius: 4px; padding: 14px 16px;">
                </div>
                <button style="background: #50C878; color: white ; padding: 12px 10px; width:140px;padding: 8px 0px; margin-top: 12px;" class="btn">Log In</button>
            </form>
        </div>
        <!-- <div class="separator"> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>