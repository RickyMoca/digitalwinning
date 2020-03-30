<div class="col-md-5">
    <div class="card">
        <div class="card-body bg-dark text-center card-img-top" style="background-image: url(assets/vendor/images/backgrounds/panel_bg.png); background-size: contain;">
            <div class="card-img-actions d-inline-block mb-3">
                <img class="img-fluid rounded-circle" src="<?= base_url(); ?>assets/vendor/images/placeholders/pic.png" width="170" height="170" alt="">
                <div class="card-img-actions-overlay rounded-circle">
                    <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                        <i class="icon-plus3"></i>
                    </a>

                </div>
            </div>

            <?php $name = $this->session->userdata('name');
            $date = $this->session->userdata('date_created') ?>
            <h6 class="font-weight-semibold mb-0"><?= $name ?></h6>
            <span class="d-block opacity-75">Member since <?= date('d F Y', $date); ?></span>


            <div class="list-icons list-icons-extended mt-3">
                <a href="<?= base_url('auth/logout'); ?>" class="text-light">
                    <i class="icon-switch2"></i>
                    Logout
                </a>
            </div>
        </div>


    </div>
</div>

<div class="col-md-7">


    <div class="card-body bg-light text-center">


        <h3 class="my-3"> Welcome to App <strong class="text-info">Digital Winning</strong></h3>
        <div class="row mx-auto mb-2">


        </div>

        <div class="card bg-info py-2">
            <h4> <i class="mi-info mr-1 mi-2x"></i>Nampaknya kamu belum absen hari ini! <strong> absen dulu yuk sayang</strong></h4>
        </div>
        <!-- <div class="card bg-success py-2">
            <h4> <i class="mi-done-all mr-1 mi-2x"></i>Makasih ya kamu udah absen hari ini <strong> jangan lupa makan ya :)</strong></h4>
        </div> -->
        <a href="<?= base_url('home/absenyuk') ?>" class="btn btn-warning"><i class="mi-touch-app mi-2x mr-1 "></i>Absen Sekarang <strong> yuk!</strong></a>
        <a href="<?= base_url('home/absenyuk') ?>" class="btn btn-success"><i class="mi-touch-app mi-2x mr-1 "></i>Weits sebelum udahan <strong>klik disini yah!</strong></a>

        <hr>




    </div>

</div>