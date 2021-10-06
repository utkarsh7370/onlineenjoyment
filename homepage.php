<?php
session_start();
// if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
// {
//   header("location: login.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> onlineenjoyment.com </title>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">-->
  <link rel="stylesheet" href="homepage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>


<body style=" font-family: 'Roboto', sans-serif; background: #d7e5e7;">
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
            <a class="nav-link active" aria-current="page" href="homepage.php" style="color: #a7d3ab;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="music.php" style="color: #019d58;">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movie.php" style="color: #019d58;">Movie</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="other.php" style="color: #019d58;">Others</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style="color: #019d58;">log out</a>
</li>

        </ul>

      </div>
      <!-- <div class="navbar-collapse ">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <
          </li>
        </ul>
      </div> -->
    </div>
  </nav>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="float: left; padding: 5px 0px 0px 0px;" src="home3.webp" width="400" height="550"
          class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="float: left; padding: 5px 0px 0px 0px;" src="home2.webp" width="400" height="550"
          class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="float: left; padding: 5px 0px 0px 0px;" src="home6.webp" width="400" height="550"
          class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>


  <div class="wrapper">

    <div class="Music utility" style="background-image: url('music_home.jpg'); background-size: 103%">
      <h3 style="color: white;">Music</h3>
      <div class="myMusic">
        <ul>
          <li style="color: white;">Romantic</li>
          <li style="color: white;">Classic</li>
          <li style="color: white;">Sad</li>
          <li style="color: white;">Rock</li>
        </ul>
        <!-- <a href="/index.html" class="btn btn-default">Open</a> -->
      </div>
      <!-- <a href="/index.html" class="btn btn-default">Open</a>  -->

    </div>

    <div class="Movie utility" style="background-image: url('movie_home.webp'); background-size: 100%">
      <h3 style="color: white;">Movie</h3>
      <div class="myMovie">
        <ul>
          <li style="color: white;">Romantic</li>
          <li style="color: white;">Action</li>
          <li style="color: white;">Classic</li>
          <li style="color: white;">Thriller</li>
        </ul>
      </div>
      <!-- <a href="/mov.html" class="btn btn-default">Open</a> -->

    </div>




    <div class="Other utility" style="background-image: url('other_home.webp'); background-size: 100%">
      <h3 style="color: white;">Others</h3>
      <div class="myMovie">
        <ul>
          <li style="color: white;">Cooking</li>
          <li style="color: white;">Gardening</li>
          <li style="color: white;">Gaming</li>
        </ul>
      </div>
      <!-- <a href="/Other.html" class="btn btn-default">Open</a> -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>