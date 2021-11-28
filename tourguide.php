<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WISATA</title>
</head>
    <?php
    ob_start();
    session_start();

    // apakah email user tidak aktif ? jika tidak aktif = belum login
    // diarahkan ke file login
    if(!isset($_SESSION['emailuser']))
        header("location:login.php");
    ?>

    <?php include "header.php"; ?>

<div class="container-fluid">
<div class="card shadow mb-4">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Destinasi Wisata</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<?php 
	include "includes/config.php";
	if(isset($_POST['Simpan']))
	{
		$kodefoto = $_REQUEST['inputkode'];
		$namafoto = $_REQUEST['inputnama'];

		// atribut yang boleh diubah itu adalah file
		// digunakan untuk menampung data foto
		$nama = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		//memberi variable untuk menampung ext file yang diupload
		$ekstensifile = pathinfo($nama, PATHINFO_EXTENSION);

		// periksa ext file harus jpg atau png
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "JPEG")or ($ekstensifile == "jpeg"))
		{
			// menerima dari $filetemp dan disimpan di folder images
			move_uploaded_file($file_tmp, 'images/'.$nama);

			mysqli_query($connection,"insert into tourguide value('$kodetranportasi','$namatranportasi','$nama')");

			header("location:tourguide.php");
		}
	}
?>

<body>

<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Input Photo tourguide Wisata</h1>
		</div>
	</div>

	<form method="POST" enctype="multipart/form-data">

        <div class="form-group row">
            <label for="kodetourguide" class="col-sm-2 col-form-label">Kode tourguide</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kodetourguide" name="inputkode" placeholder="Kode tourguide" maxlength="4">
            </div>
        </div>

		<div class="form-group row">
			<label for="namatourguide" class="col-sm-2 col-form-label">Nama tourguide</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namatourguide" name="inputnama" placeholder="Nama tourguide">
			</div>
		</div>


		<div class="form-group row">
			<label for="file" class="col-sm-2 col-form-label">Photo tourguide</label>
			<div class="col-sm-10">
				<input type="file" id="file" name="file">
				<p class="help-block">Field ini digunakan untuk unggah file</p>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
				<input type="reset" class="btn btn-secondary" value = "Reset" name = "Reset">   
			</div>
			</div>

		</div>
	
	</form>

</div>

<div class="col-sm-1"></div>
</div>

	<!-- Output -->
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
				<div class="jumbotron jumbotron-fluid">
						<div class="container">
							<h1 class="display-4">Daftar tourguide Wisata</h1>
						</div>
				</div>

		<table class="table table-hover">
			<thead> <style>thead{background : linear-gradient(to right, orange, #ec38bc, #7303c0, cyan)}</style>
				<tr>
					<th>No</th>
					<th>Kode tourguide</th>
					<th>Nama tourguide Wisata</th>
					<th>Photo tourguide</th>
				</tr>
			</thead>

			<tbody>
				<?php $query = mysqli_query($connection, "select * from tourguide");
				$nomor = 1;
				while ($row = mysqli_fetch_array($query))
					{ ?>
						<tr>
							<td><?php echo $nomor;?></td>
							<td><?php echo $row['tourID'];?></td>
							<td><?php echo $row['tourNama'];?></td>

							<td>
								<!-- Apabila gambar ada -->
								<?php if(is_file("images/".$row['tourguideFile']))
								{ ?>
									<img src="images/<?php echo $row['tourguideFile']?>" width="80" height="80">
								<?php } 
								else 
									echo "<img src='images/noimage.png' width='80'>"
								?> 
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
	</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
</html>