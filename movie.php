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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#157878">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <title> onlineenjoyment.com </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="movie.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>


<body style="background: #d7e5e7;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-top: 1.8rem;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">OnlineEnjoyment</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse respon" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="homepage.php" style="color: #019d58;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="music.php" style="color: #019d58;">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="movie.php" style=" color: #a7d3ab;">Movie</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="other.php" style="color: #019d58;">Others</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" style="color: #019d58;">log out</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#" style = " color: #019d58;"><img src="https://img.icons8.com/external-becris-lineal-becris/10/000000/external-user-mintab-for-ios-becris-lineal-becris.png"/></a>
          </li> -->

        </ul>

      </div>

    </div>
  </nav>

  <div class="Image">
    <img src="Movie-time-2.webp" width="400" height="400" alt="">
  </div>
  <h6> Note : Click on tittle to watch trailer.</h6>
  <div class="mBoxes" style="background: #d7e5e7;">

    <div id="scific" class="Sci-fic" style=" background-image: url('sci-fic.webp') ; margin: 22px;">

      <h2>Sci-fic</h2>
      <ol>
        <li class="lines"><a href="https://youtu.be/8YjFbMbfXaQ" target="_blank">Shang-Chi and the Legend of the
            Ten Rings(2021)</a></li>
        <li class="lines"><a href="https://youtu.be/8g18jFHCLXk" target="_blank">Dune (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/eC4PI9y6AVQ " target="_blank">The Matrix Resurrections
            (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/kEhn3BJflfA" target="_blank">Free Guy(2021)</a></li>
        <li class="lines"><a href="https://youtu.be/RDBIKpbOY9M" target="_blank">Prisoners of the Ghostland
            (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/eg5ciqQzmK0" target="_blank">The Suicide Squad (2021)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/zcuWXgzIMog" target="_blank">Venom: Let There Be Carnage
            (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/SL9aJcqrtnw" target="_blank">Don't Look Up (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/KaffwcdPeGg" target="_blank">Spider-Man: No Way Home
            (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/Fp9pNPdNwjI" target="_blank">Black Widow (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/tKctq46j2qw" target="_blank">Tenet (2020)</a></li>
        <li class="lines"><a href="https://youtu.be/zTZDb_iKooI" target="_blank">News of the World (2020)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/9mkiY-37OG4" target="_blank">Boss Level (2021)</a></li>
        <li class="lines"><a href="https://youtu.be/j9Okx5teGBQ" target="_blank">Riders of Justice (2020)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/bFwdl2PDAFM" target="_blank">Demon Slayer: Mugen Train
            (2020)</a></li>
        <li class="lines"><a href="https://youtu.be/3l6wHrr6dCA" target="_blank">Greyhound (2020)</a></li>
        <li class="lines"><a href="https://youtu.be/hCToNAb7QGU" target="_blank">Shadow in the Cloud (2020)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/DdIHtymX_Fc" target="_blank">Love and Monsters (I)
            (2020)</a></li>
        <li class="lines"><a href="https://youtu.be/kGM4uYZzfu0" target="_blank">Birds of Prey (2020)</a></li>
        <li class="lines"><a href="https://youtu.be/XW2E2Fnh52w" target="_blank">Wonder Woman 1984 (2020)</a>
        </li>
      </ol>
    </div>
    <div id="thriller" class="Thriller" style=" background-image: url('thriller.webp'); margin: 22px;">
      <h2>Thriller</h2>
      <ol>
        <li class="lines"><a href="https://youtu.be/LDG9bisJEaI" target="_blank">The Dark Knight (2008)</a></li>
        <li class="lines"><a href="https://youtu.be/znmZoVkCjpI" target="_blank">Se7en (1995)</a></li>
        <li class="lines"><a href="https://youtu.be/W6Mm8Sbe__o" target="_blank">The Silence of the Lambs
            (1991)</a></li>
        <li class="lines"><a href="https://youtu.be/5etqnUzE7Jw" target="_blank">Raatchasan (2018)</a></li>
        <li class="lines"><a href="https://youtu.be/RLtaA9fFNXU" target="_blank">The Prestige (2006)</a></li>
        <li class="lines"><a href="https://youtu.be/iQpb1LoeVUc" target="_blank">The Departed (2006)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/oiXdPolca5w" target="_blank">The Usual Suspects (1995)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/aNQqoExfQsg" target="_blank">Léon: The Professional
            (1994)</a></li>
        <li class="lines"><a href="https://youtu.be/WwkZqhpE0E4" target="_blank">Joker (2019)</a></li>
        <li class="lines"><a href="https://youtu.be/n3_iLOp6IhM" target="_blank">The Lives of Others (2006)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/2HkjrJ6IK5E" target="_blank">Oldboy (2003)</a></li>
        <li class="lines"><a href="https://youtu.be/4CV41hoyS8A" target="_blank">Memento (2000)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/9ZpPQdrHfl8" target="_blank">Gangs of Wasseypur (2012)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/xndCrKr3ha0" target="_blank">Gangs of Wasseypur 2 (2012)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/5iaYLCiq5RM" target="_blank">Shutter Island (2010))</a></li>
        <li class="lines"><a href="https://youtu.be/I1BrxwITBow" target="_blank">Logan (2017)</a></li>
        <li class="lines"><a href="https://youtu.be/g7jmt1vz0Mk" target="_blank">Room (I) (2015)</a>
        </li>
        <li class="lines"><a href="https://youtu.be/viZNqGQK3Ks" target="_blank">Wild Tales (2014))</a></li>
        <li class="lines"><a href="https://youtu.be/J8A81h_EXnc" target="_blank">Gone Girl (2014)</a></li>
        <li class="lines"><a href="https://youtu.be/47LneWrxIz8" target="_blank">Prisoners (2013)</a>
        </li>
      </ol>
    </div>
    <div id="classic" class="Classic" style=" background-image: url('classic_2.webp'); margin: 22px;">
      <h2>Classic</h2>
      <ol>
        <li class="lines"><a href="https://youtu.be/UblFlYYU84w" target="_blank">Anand (1971)</a></li>
        <li class="lines"><a href="https://youtu.be/heZKxrBjU_U" target="_blank">Awaraa</a></li>
        <li class="lines"><a href="https://youtu.be/UGMN2X9knUI" target="_blank">Do Ankhen Barah Haath</a></li>
        <li class="lines"><a href="https://youtu.be/T1xTqCNTGT8" target="_blank">Mother India</a></li>
        <li class="lines"><a href="https://youtu.be/j2av8NBncSo" target="_blank">Mughal-E-Azam</a></li>
        <li class="lines"><a href="https://youtu.be/O4vSjKIFx6s" target="_blank">Jewel thief</a>
        </li>
        <li class="lines"><a href="https://youtu.be/hr-BOE45uE0" target="_blank">Aradhana</a>
        </li>
        <li class="lines"><a href="https://youtu.be/BavivBkbuSQ" target="_blank">Janglee</a></li>
        <li class="lines"><a href="https://youtu.be/OzKlNHmRTz4" target="_blank">Seeta aur geeta</a></li>
        <li class="lines"><a href="https://youtu.be/FtRq5rcw-T4" target="_blank">Sholay</a>
        </li>
        <li class="lines"><a href="https://youtu.be/DuJ_7UVyGIc" target="_blank">Deewar</a></li>
        <li class="lines"><a href="https://youtu.be/jZ6sC4H3z-M" target="_blank">Shaan</a>
        </li>
        <li class="lines"><a href="https://youtu.be/u-M8ktNAPIE" target="_blank">Disco Dancer</a>
        </li>
        <li class="lines"><a href="https://youtu.be/EffKfiZwVKU" target="_blank">Silsila</a>
        </li>
        <li class="lines"><a href="https://youtu.be/M-gU6wAcFbM" target="_blank">Boxer</a></li>
        <li class="lines"><a href="https://youtu.be/kP7YwNjlRxM" target="_blank">Saagar</a></li>
        <li class="lines"><a href="https://youtu.be/On67Oy7NQZ4" target="_blank">Agneepath</a>
        </li>
        <li class="lines"><a href="https://youtu.be/G61v-QcYTqg" target="_blank">Ganga Jamuna</a></li>
        <li class="lines"><a href="https://youtu.be/SsmG8IqOoHE" target="_blank">Ganga jamuna saraswati</a></li>
        <li class="lines"><a href="https://youtu.be/PEPyOViG9-Q" target="_blank">Madhumati</a>
        </li>

      </ol>
    </div>
    <div id="romantic" class="Romantic" style=" background-image: url('romantic_2.webp'); margin: 22px">
      <h2>Romantic</h2>
      <ol>
        <li class="lines"><a href="https://youtu.be/cmax1C1p660" target="_blank">Dilwale Dulhaniya Le
            jayenge</a></li>
        <li class="lines"><a href="https://youtu.be/tVMAQAsjsOU" target="_blank">Kal Ho Naa Ho</a></li>
        <li class="lines"><a href="https://youtu.be/Ppg7A3A2NpY" target="_blank">Dil Chahta hai</a></li>
        <li class="lines"><a href="https://youtu.be/OSaVImLnnsw" target="_blank">Veer-Zara</a></li>
        <li class="lines"><a href="https://youtu.be/2ACKWIprdN8" target="_blank">Jab we met</a></li>
        <li class="lines"><a href="https://youtu.be/IR5ReWgs-iQ" target="_blank">Kuch kuch hota hai</a>
        </li>
        <li class="lines"><a href="https://youtu.be/MTp_nvwHjMA" target="_blank">Devdas</a>
        </li>
        <li class="lines"><a href="https://youtu.be/9xMNTO-hUXI" target="_blank">Yeh Jawani Hai Deewani</a></li>
        <li class="lines"><a href="https://youtu.be/TJukJ33ceEw" target="_blank">Jodha akbar</a></li>
        <li class="lines"><a href="https://youtu.be/An4vqppEWXU" target="_blank">Saadi me jarur aana</a>
        </li>
        <li class="lines"><a href="https://youtu.be/VHEtoZ4LPLM" target="_blank">Fanaa</a></li>
        <li class="lines"><a href="https://youtu.be/PGOt2fRrnvw" target="_blank">Wàkeup Sid</a>
        </li>
        <li class="lines"><a href="https://youtu.be/wGGmyaurjAI" target="_blank">Tanu weds Manu Returns</a>
        </li>
        <li class="lines"><a href="https://youtu.be/Ds2JXPKZB6s" target="_blank">Bareilly Ki Barfi</a>
        </li>
        <li class="lines"><a href="https://youtu.be/NV10kNGRC9s" target="_blank">Pal pal dil ke paas</a></li>
        <li class="lines"><a href="https://youtu.be/FyXXgpPqe6w" target="_blank">Aashiqui 2</a></li>
        <li class="lines"><a href="https://youtu.be/2fiT_TJlySk" target="_blank">Hamari adhuri kahani</a>
        </li>
        <li class="lines"><a href="https://youtu.be/1IpBoMWRjm8" target="_blank">Sanam Teri Kasam</a></li>
        <li class="lines"><a href="https://youtu.be/8vicEGLOEdw" target="_blank">Junooniyat</a></li>
        <li class="lines"><a href="Shershah" target="_blank">Madhumati</a>
        </li>
      </ol>
    </div>
  </div>

  <script>
    window.mobileCheck = function () {
      let check = false;
      (function (a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
      return check;
    };
    if (window.mobileCheck()) {
      const scific = document.querySelector("#scific");
      scific.style.width = "100%";
      const thriller = document.querySelector("#thriller");
      thriller.style.width = "100%";
      const classic = document.querySelector("#classic");
      classic.style.width = "100%";
      const romantic = document.querySelector("#romantic");
      romantic.style.width = "100%";
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>