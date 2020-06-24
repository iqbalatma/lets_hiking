<!--about-->
<?php if (isset($nama_gunung)) {

?>

    <div class="about">
        <div class="container">
            <h3 class="title"><?php echo $nama_gunung ?></h3>
            <div class="about-text">
                <div class="col-md-6 about-text-left">

                </div>
                <div class="col-md-6 about-text-right">
                    <?php echo $isi_konten ?>
                    <?= $status_gunung ?>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<?php
} else {
    $gunung    = $this->gunung_model->home();
?>
    <!--baner-->
    <div class="baner">
        <div class="container">
            <div class="baner-grids">
                <div class="baner-row">
                    <div class="row row-cols-1 row-cols-md-3">
                        <?php foreach ($gunung as $gunung) { ?>
                            <div class="col mb-4">
                                <a href="<?php echo base_url('home/read/' . $gunung->slug_gunung) ?>">
                                    <div class="card">
                                        <img src="<?= base_url('assets/img/gunung.jpg') ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $gunung->nama_gunung ?></h5>
                                    <p class="card-text"><?php echo ($gunung->konten) ?></p>
                                    <p class="card-text"><?php echo ($gunung->status_gunung) ?></p>
                                    <p class="card-text"><?php echo ($gunung->kategori_gunung) ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo base_url('home/read/' . $gunung->slug_gunung) ?>">Read More</a>
                                </div>
                            </div>
                    </div>
                <?php } ?>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//baner-->
<?php
} ?>