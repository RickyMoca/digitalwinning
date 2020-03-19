<div class="col-lg-12">
    <div class="card">

        <div class="col-lg-8 mx-auto mb-2 mt-5">

            <div class="col-md-auto  bg-light px-3 py-3 mx-auto mt-1">
                <h4 class="card-title"> <i class="icon-info22 mr-2 icon-1x"></i>Detail Promo</h4>

                <div class="float-right">
                    <input type="checkbox" class="form-check-input-switchery" name="status" checked data-fouc>
                </div>
                <h1><strong>Promo Coredash</strong></h1>
                <hr>
                <h3><i class="icon-cash3 mr-2 icon-1x"></i><strong>Rp.175,000 </strong></h3>
                <h6><i class="icon-unlink mr-2 icon-1x"></i><strong> <a href=""> http://gudangperkakas.com/lp-1</a> </strong></h6>
                <h6><i class="icon-clipboard6 mr-2 icon-1x"></i>Beli 1 Gratis 1 Free ongkir</h6>
            </div>

        </div>

        <!-- Coment Divender -->
        <div class="col-lg-8 mx-auto mt-4">
            <div class="row">
                <div class="col-lg-3">
                    <h1> <strong> COMMENTS</strong>
                        <span class="badge badge-warning">1</span>
                    </h1>
                </div>
                <div class="col">
                    <hr class="border-1">
                </div>

            </div>
        </div>
        <!-- End Coment Dive -->

        <div class="col-lg-8 mx-auto mb-5">
            <div class="card bg-light">

                <ul class="mt-3">

                    <li class="media">
                        <div class="text-grey"> <i class="mi-account-circle mi-3x mr-2"></i></div>

                        <div class="media-chat-item col-md-10">
                            <div class="font-size-sm text-muted mt-2 float-right"> Mart, 17 </div>
                            <strong>Mohamad Ricky</strong>
                            <h6> Itu Maksudnya gmna kang?</h6>
                        </div>
                    </li>
                    <li class="media">
                        <div class="text-grey"> <i class="mi-account-circle mi-3x mr-2"></i></div>

                        <div class="media-chat-item col-md-10">
                            <div class="font-size-sm text-muted mt-2 float-right"> Mart, 18 </div>
                            <strong>Sarah NHK</strong>
                            <h6> iya gitu we pokonya mah wkwkwk</h6>
                        </div>
                    </li>

                </ul>

            </div>


            <div class="row text-center">
                <div class="col-md-10">
                    <input type="text" class="form-control  my-3 bg-light border-1 border-grey font-weight-semibold" placeholder="Enter your comment...">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn bg-dark my-3 btn-labeled btn-labeled-right"><b><i class="icon-paperplane"></i></b> Send</button>
                </div>
            </div>


        </div>


    </div>
</div>


<!-- Primary modal  Add User-->
<div id="modal_theme_primary" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-slate-600">
                <h6 class="modal-title">Primary header</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <form class="user" method="post" action="<?= base_url('admin/registration'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" disabled="true" id="iduser" name="iduser" value="<?= $id ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-6">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
                            <?= form_error('password2', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>

                    </div>
                    <div class="form-row mb-4">
                        <div class="col-2">
                            &nbsp;<label> Status :</label>
                        </div>
                        <div class="col">
                            <label class="switch size-sm">
                                <input type="checkbox" checked="true" value="1" name="status">
                                <span class="slider round success"></span>
                            </label>
                        </div>
                        <div class="col">
                            <select id="inputState" name="hakakses" class="form-control">
                                <option selected="true">-Select Hakases-</option>
                                <?php foreach ($getrole as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn bg-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-slate-600">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Primary modal -->


<script src="<?= base_url(); ?>assets/vendor/js/demo_pages/form_checkboxes_radios.js"></script>