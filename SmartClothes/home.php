<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bagus.css">
    <title>SmartClothes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white10">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Store
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Desain</a></li>
            <li><a class="dropdown-item" href="#">Fabrics</a></li>
            <li><a class="dropdown-item" href="#">Clothes</a></li>
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
        </li>
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit" >Search</button>
    </form>
   <ul></ul>
    <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
      </svg>
    </a>
    </div>
    </div>
    </nav>
    <!-- about us -->
    <section id="about" class="spacer10">
        <div class="container">
            <h1 class="bold size4 ta-center">About Us</h1>
            <p class="spacebottom3 halfwhite size2 ta-center">
                Lorem ipsum dolor sit amet, consectetur<br>adipiscing elit.
            </p>
            <div class="row ai-center jc-between flexcol-s">
                <div class="col5 col10-s spacebottom2-s">
                    <img src="2.jpg" class="img-responsive" alt="">
                </div>
                <div class="col6 col12-s ta-center-s">
                    <h3 class="size3 bold">Get Popular NFT</h3>
                    <p class="size2 spacetop1 spacebottom3 halfwhite">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.
                        Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla
                        accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget
                        condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos.
                    </p>
                    <a href="#collections" class="btn bg-purple size2 white">Show more</a>
                </div>
            </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

