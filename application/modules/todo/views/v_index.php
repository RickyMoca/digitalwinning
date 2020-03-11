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
            <div class="card border-left-2 border-left-indigo-400 border-right-2 border-right-indigo-400 rounded-0 col-lg mr-1">

                <div class="card-header">
                    <span class="card-title text-info"><i class="icon-menu6 mr-1"></i><label class="font-weight-semibold">TODOLIST</label></span>

                    <h2 class="text-info"> 287</h2>
                </div>
            </div>

            <div class="card border-left-2 border-left-indigo-400 border-right-2 border-right-indigo-400 rounded-0 col-lg mr-1">
                <div class="card-header">
                    <span class="card-title text-danger"><i class="icon-blocked  mr-1"></i><label class="font-weight-semibold">NO'T RESPONSE</></span>

                    <h2 class="text-warning"> 287</h2>
                </div>
            </div>
            <div class="card border-left-2 border-left-indigo-400 border-right-2 border-right-indigo-400 rounded-0 col-lg mr-1">
                <div class="card-header">
                    <span class="card-title text-success"><i class="icon-checkbox-checked2 mr-1"></i><label class="font-weight-semibold">COMPLETED</label></span>

                    <h2 class="text-success"> 287 </h2>

                </div>
            </div>

        </div>

        <button class="btn btn-dark"><i class="icon-user mr-1"></i> My Todolist</button>
        <button class="btn btn-dark"><i class="icon-paperplane mr-1"></i> I sign</button>




    </div>

</div>