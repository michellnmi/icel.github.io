<!DOCTYPE html>

<?php
    include "includes/config.php";
    $query = mysqli_query($connection,"select * from area");

    $destinasi = mysqli_query($connection,"select * from kategori, destinasi, fotodestinasi
    where kategori.kategoriID = destinasi.kategoriID and
    destinasi.destinasiID = fotodestinasi.destinasiID");

    $sql = mysqli_query($connection,"select * from destinasi");
    $jumlah = mysqli_num_rows($sql);

    $foto = mysqli_query($connection,"select * from fotodestinasi"); 

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <title>WISATA</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                        <img src="images/icon.jpg" alt="Logo" style="width:40px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">Tour Guide</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Transportation & Resorts</a></li> 
                            <li class="submenu">
                                <a href="javascript:;" id="navbarDropdown" role="button" data-toggle="dropdown">Area</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <?php 
                                if(mysqli_num_rows($query)>0)
                                    {
                                        while($row = mysqli_fetch_array($query))
                                    { ?>
                                <a class="dropdown-item" href="#"><?php echo $row["areaNama"]?></a>
                             <?php } } ?>

                            </div>
                            </li>
                            <li class="scroll-to-section"><a href="#testimonials" class="active">introduce</a></li>
                            <div class="search-icon">
                            <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            </div>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>