<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Retro Simulator</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0" />
    <meta author="Jsm33t" />
    <meta property="og:image" content="../assets/preview.png" />

    <link rel="shortcut icon" href="../assets/icons/computer-3.png" type="image/png">

    <link rel="stylesheet" href="../assets/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="../assets/win95.css">

<style>
   @keyframes move {
        from {
            transform: translate(0%);
        }
        50% {
            transform: translate(-40%);
        }
        to {
            transform: transform(0%);
        }
        }

</style>
<?php
if(empty($_GET['page'])){   
?>

<body class=" windows-scrollbar" id="crt_main">



    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-95 ">
  <a class="navbar-brand" href="#">
      <img src="assets/icons/windows_slanted-1.png">&nbsp;R3tr0</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery">Gallery</a>
      </li>
     
     
  <!--    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          UI Elements
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
-->
    </ul>
  </div>
</nav>





</div>
    </nav>


    <?php
}
?>