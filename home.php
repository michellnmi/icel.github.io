<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>WEBSITE WISATA</h6>
                        <h2>Michelle Naomi</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>825200079 <br><br> noun
                        an extended journey, usually taken for pleasure, visiting places of interest along the route
                        military a period of service, esp in one place of duty
                        a short trip, as for inspection
                        a trip made by a theatre company, orchestra, etc, to perform in several different placesa concert tour</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    
    <!-- ***** Tour Guide ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tour Guide</h6>
                            <h2>We did our best</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/dir.jpg" style="width:150px; height:150px" alt="">
                                    <h4>Michelle</h4>
                                    <h5>TO01</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/dua.jpg"  style="width:150px; height:150px" alt="">
                                    <h4>Naomi</h4>
                                    <h5>TO02</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/dor.jpg"  style="width:150px; height:150px" alt="">
                                    <h4>Yoan</h4>
                                    <h5>TO03</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/empat.jpg"  style="width:150px; height:150px" alt="">
                                    <h4>Vanessa</h4>
                                    <h5>TO04</h5>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="tourguide.php" class="main-button-icon">
                                    Daftar Disini <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p><a href="#" rel="nofollow noopener" target="_parent">Good morning ladies and gentlemen. Welcome to this website.
                        How was your flight? I hope it was a nice flight.</a> Good morning, ladies and gentlemen. I would like to welcome you all. 
                        First of all, you should all adjust your watches since we are at a different time area. Before I explain to you all further about our tour for today, allow me to introduce myself.
                         I am your tour guide for today from this Travel Agency. <a rel="nofollow noopener" target="_parent">talk to us</a> if you have anything. 
                         Ladies and gentlemen, the tour ends here as we are on our way back to your hotel. Make sure you get plenty of rest so we can continue our tour tomorrow morning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
        </section>

		<div class="col-sm-1"></div>

	</div> <!-- penutup row output -->
    
    	<!-- ***** Transportasi ***** -->
    <section class="section" id="contact-us">
    <div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
				<div class="jumbotron jumbotron-fluid">
						<div class="container">
							<h1 class="display-4">Daftar Transportasi Wisata</h1>
						</div>
				</div>

		<table class="table table-hover">
			<thead> <style>thead{background : linear-gradient(to right, orange, #ec38bc, #7303c0, cyan)}</style>
				<tr>
					<th>No</th>
					<th>Kode Transportasi</th>
					<th>Nama Transportasi Wisata</th>
					<th>Photo Transportasi</th>
					<th colspan="2" style="text-align: center">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php $query = mysqli_query($connection, "select * from transportation");
				$nomor = 1;
				while ($row = mysqli_fetch_array($query))
					{ ?>
						<tr>
							<td><?php echo $nomor;?></td>
							<td><?php echo $row['transportasiID'];?></td>
							<td><?php echo $row['transportasiNama'];?></td>

							<td>
								<!-- Apabila gambar ada -->
								<?php if(is_file("images/".$row['transportasiFile']))
								{ ?>
									<img src="images/<?php echo $row['transportasiFile']?>" width="80" height="80">
								<?php } 
								else 
									echo "<img src='images/noimage.png' width='80'>"
								?> 
							</td>
								
							<!-- Button Edit -->
							<td>
								<a href="transportation.php?ubahfoto=<?php echo $row['transportasiID']?>" class="btn btn-success btn-sm" title="EDIT">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
								<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
								<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
								</svg>
								</a>
							</td>

							<!-- Button Hapus -->
							<td>
								<a href="transportation.php?hapusfoto=<?php echo $row['transportasiID']?>" class="btn btn-danger btn-sm" title="DELETE">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
								<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
								<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
								</svg>
								</a>
							</td>

						</tr>
						<?php $nomor = $nomor + 1;?>
					<?php } ?> 
			</tbody>
		</table>
		</div>

		<div class="col-sm-1"></div>

	</div> <!-- penutup row output -->
    </div>

    <br><br>

     <!-- ***** Resorts ***** -->
        <!-- Output -->
    <div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
				<div class="jumbotron jumbotron-fluid">
						<div class="container">
							<h1 class="display-4">Daftar Tempat Wisata</h1>
						</div>
				</div>

		<table class="table table-hover">
			<thead> <style>thead{background : linear-gradient(to right, orange, #ec38bc, #7303c0, cyan)}</style>
				<tr>
					<th>No</th>
					<th>Kode Tempat</th>
					<th>Nama Tempat Wisata</th>
					<th>Photo Tempat</th>
					<th colspan="2" style="text-align: center">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php $query = mysqli_query($connection, "select * from place");
				$nomor = 1;
				while ($row = mysqli_fetch_array($query))
					{ ?>
						<tr>
							<td><?php echo $nomor;?></td>
							<td><?php echo $row['placeID'];?></td>
							<td><?php echo $row['placeNama'];?></td>

							<td>
								<!-- Apabila gambar ada -->
								<?php if(is_file("images/".$row['placeFile']))
								{ ?>
									<img src="images/<?php echo $row['placeFile']?>" width="80" height="80">
								<?php } 
								else 
									echo "<img src='images/noimage.png' width='80'>"
								?> 
							</td>
								
							<!-- Button Edit -->
							<td>
								<a href="place.php?ubahfoto=<?php echo $row['placeID']?>" class="btn btn-success btn-sm" title="EDIT">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
								<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
								<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
								</svg>
								</a>
							</td>

							<!-- Button Hapus -->
							<td>
								<a href="place.php?hapusfoto=<?php echo $row['placeID']?>" class="btn btn-danger btn-sm" title="DELETE">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
								<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
								<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
								</svg>
								</a>
							</td>

						</tr>
						<?php $nomor = $nomor + 1;?>
					<?php } ?> 
			</tbody>
		</table>
		</div>
    </section>

      <!-- ***** Testimonials Starts ***** -->
      <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Team</h6>
                        <h2>young and talented members</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="assets/images/hai.jpg" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
        </section>
    <!-- ***** Testimonials Ends ***** -->

</html>