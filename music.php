<?php
session_start();
// if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
// {
//   header("location: login.php");
// }
?>
<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css" />
	 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

	<title>onlineenjoyment.com</title>

	<style>
		body {
			background-color: #ece6e6;
			font-family: 'Roboto', sans-serif;
		}

		.navbar {
			height: 90px;
			
		}

		img {
			width: 100%;
			min-height: 250px;
		}

		.main {
			padding: 40px 0;
		}

		.col-md-3 {
			margin-bottom: 40px;
		}

		.album-poster {
			position: relative;
			display: block;
			border-radius: 7px;
			overflow: hidden;
			box-shadow: 0 15px 35px #3d2173a1;
			transition: all ease 0.4s;
		}

		.album-poster:hover {
			box-shadow: none;
			transform: scale(0.98) translateY(5px);
		}

		h3 {
			text-align: center;
			font-size: 34px;
			margin-bottom: 34px;
			border-bottom: 4px solid #e6e6e6;
			padding-bottom: 15px;
		}

		p {
			font-size: 15px;
		}

		h4 {
			font-size: 16px;
			text-transform: uppercase;
			margin-top: 15px;
			font-weight: 700;
		}


		/*default is hide music player*/
		#aplayer {
			position: fixed;
			bottom: -100%;
			left: 0;
			width: 100%;
			margin: 0;
			box-shadow: 0 -2px 2px #dadada;
			background-color: #fff;
			transition: all ease 0.5s;
		}

		#aplayer.showPlayer {
			bottom: 0;
		}


		/*MUSIC PLAYER CUSTOMIZING STYLE*/
		span {
			color: #000 !important;
			font-size: 16px;
		}

		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-loaded {
			background: #e0e0e0;
			height: 4px;
		}

		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played {
			height: 4px;
			background-color: #2196F3 !important;
		}

		.aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played .aplayer-thumb {
			background-color: #2196F3 !important;
		}

		.aplayer .aplayer-icon {
			width: 20px;
			height: 20px;
		}

		.aplayer .aplayer-info .aplayer-controller .aplayer-time .aplayer-icon path {
			fill: #000;
		}

		.aplayer .aplayer-info .aplayer-music {
			margin-bottom: 5px;
		}
	</style>
</head>

<body style =" font-family: 'Roboto', sans-serif; background: #d7e5e7;">
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
            <a class="nav-link" aria-current="page" href="homepage.php" style = " color: #019d58;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="music.php" style = "color: #a7d3ab;">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movie.php" style = "color: #019d58;">Movie</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="other.php" style = "color: #019d58;">Others</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style = "color: #019d58;">log out</a>
            </li> 
          <!-- <li class="nav-item">
            <a class="nav-link" href="#" style = " color: #019d58;"><img src="https://img.icons8.com/external-becris-lineal-becris/30/000000/external-user-mintab-for-ios-becris-lineal-becris.png"/></a>
          </li> -->

        </ul>

      </div>
      
    </div>
  </nav>
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>MUSIC CORNER</h3>
				</div>
				<div class="col-md-3">
					<a href="javascript:void();" class="album-poster" data-switch="0">
						<img src="https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Invisible Beauty</h4>
					<p>Loren Hadid - 2010</p>
				</div>
				<div class="col-md-3">
					<a href="#" class="album-poster" data-switch="1">
						<img src="https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Just Stay</h4>
					<p>Lakshay Soni - 2020</p>
				</div>
				<div class="col-md-3">
					<a href="#" class="album-poster" data-switch="2">
						<img src="https://images.pexels.com/photos/838696/pexels-photo-838696.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Liquid Time</h4>
					<p>Pablo Jenner- 2020</p>
				</div>

				<div class="col-md-3">
					<a href="#" class="album-poster" data-switch="3">
						<img src="https://images.pexels.com/photos/1047442/pexels-photo-1047442.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Silky Smooth </h4>
					<p>Louis Steveson - 2020</p>
				</div>
				<div class="col-md-3">
					<a href="#" class="album-poster" data-switch="4">
						<img src="https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>After You</h4>
					<p>Harum nam - 2020</p>
				</div>
				<div class="col-md-3">
					<a href="#" class="album-poster" data-switch="5">
						<img src="https://images.pexels.com/photos/210922/pexels-photo-210922.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Beggar</h4>
					<p>Daoming Si - 2020</p>
				</div>
				<div class="col-md-3">
					<a href="#" class="album-poster" data-switch="6">
						<img src="sg2.webp" alt="">
					</a>
					<h4>Into You</h4>
					<p>Laura Swift- 2010</p>
				</div>
				<div class="col-md-3">
					<a href="#" class="album-poster" data-switch="7">
						<img src="sg4.webp" alt="">
					</a>
					<h4>Love Me</h4>
					<p>Hauze Lei- 2020</p>
				</div>

			</div>


			<div class="row">
				<div class="col-md-12">
					<h3>coming soon</h3>
				</div>
				<div class="col-md-2">
					<a href="#" class="album-poster">
						<img src="https://images.pexels.com/photos/1699161/pexels-photo-1699161.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Smile</h4>
				</div>
				<div class="col-md-2">
					<a href="#" class="album-poster">
						<img src="https://images.pexels.com/photos/838702/pexels-photo-838702.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Bitter Love</h4>
				</div>
				<div class="col-md-2">
					<a href="#" class="album-poster">
						<img src="https://images.pexels.com/photos/894156/pexels-photo-894156.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Friend</h4>
				</div>

				<div class="col-md-2">
					<a href="#" class="album-poster">
						<img src="https://images.pexels.com/photos/2118046/pexels-photo-2118046.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>Meteor Garden</h4>
				</div>
				<div class="col-md-2">
					<a href="#" class="album-poster">
						<img src="https://images.pexels.com/photos/1735240/pexels-photo-1735240.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>My Girl</h4>
				</div>
				<div class="col-md-2">
					<a href="#" class="album-poster">
						<img src="https://images.pexels.com/photos/2272854/pexels-photo-2272854.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
							alt="">
					</a>
					<h4>High</h4>
				</div>
			</div>


		</div>
	</div>

	<div id="aplayer"></div>

	<!-- Jquery Link -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<!-- Bootstrap Link -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- APlayer Jquery link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>

	<script>



		$(".album-poster").on('click', function (e) {
			var dataSwitchId = $(this).attr('data-switch');

			ap.list.switch(dataSwitchId);
			ap.play();
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
			container: document.getElementById('aplayer'),
			listFolded: true,
			audio: [
				{
					name: 'Invisible Beauty',
					artist: 'Loren Hadid ',
					url: 'invisible_beauty.mp3',
					cover: 'https://images.pexels.com/photos/1699161/pexels-photo-1699161.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
				},
				{
					name: 'Just Stay',
					artist: 'Lakshay Soni',
					url: 'just_stay.mp3',
					cover: 'https://images.pexels.com/photos/838702/pexels-photo-838702.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' // COVER IMAGE
				},
				{
					name: 'Liquid Time',
					artist: 'Pablo Jenner',
					url: 'liquid_time.mp3',
					cover: 'https://images.pexels.com/photos/838696/pexels-photo-838696.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
				},
				{
					name: 'Silky Smooth',
					artist: 'Louis Steveson',
					url: 'silky_smooth.mp3',
					cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
				},
				{
					name: 'After You',
					artist: 'Harum nam',
					url: 'AUD-20210922-WA0020.mp3',
					cover: 'https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
				},
				{
					name: 'Beggar',
					artist: 'Daoming Si',
					url: 'AUD-20210922-WA0017.mp3',
					cover: 'https://images.pexels.com/photos/210922/pexels-photo-210922.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
				},
				{

					name: 'Into You',
					artist: 'Laura Swift',
					url: 'AUD-20210922-WA0017.mp3',
					cover: 'https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
				},
				{
					name: 'Love Me',
					artist: 'Hauze Lei',
					url: 'AUD-20210922-WA0020.mp3',
					cover: 'https://images.pexels.com/photos/1370545/pexels-photo-1370545.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
				}

			]
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
		crossorigin="anonymous"></script>
</body>

</html>