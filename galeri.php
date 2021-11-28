 <!-- Membuat tampilan objek -->
 <div class="container">
 <div class="mt-5">
            <div class="row">
                <div class="col-sm-8">

                <?php
                if(mysqli_num_rows($destinasi)>0)
                {
                    while($row2 = mysqli_fetch_array($destinasi))
                    { ?>

                    <div class="media">
                    <div class="media-body">
                    <h4 class="mt-0 mb-1"><?php echo $row2["destinasiNama"] ?></h4>
                    <h5><?php echo $row2["destinasiAlamat"] ?></h5>
                    <p><?php echo $row2["kategoriKeterangan"] ?></p>
                    </div>
                    <img class="ml-3" src="images/<?php echo $row2["fotoFile"]?>" style="width:100px; height:100px" alt="Gambar Tidak Ada">
                    </div>
                    <?php } } ?>
                </div>
                

                <div class="col-sm-4">
                <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Jumlah Objek Wisata
                    <span class="badge badge-primary badge-pill"><?php echo $jumlah ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dapibus ac facilisis in
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Morbi leo risus
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
                </ul>
                </div>
            </div>
        </div>
    <!-- End objek-->
    <br>
    <br>
    <!-- Galeri -->
    <div class="container">
        <div class="row">
            <?php while($row3 = mysqli_fetch_array($foto))
            { ?>
            <div class="col-sm-4">
    <figure class="figure">
    <img src="images/<?php echo $row3["fotoFile"] ?>" style=" width: 300px; height:200px;" class="figure-img img-fluid rounded" alt="Foto Tidak Ada">
    <figcaption class="figure-caption text-right"><?php echo $row3["fotoNama"] ?></figcaption>
    </figure>
    </div>
    <?php } ?>
    </div>
    </div>
    </div>
    <br>
    <br>
    <!-- End Galeri-->