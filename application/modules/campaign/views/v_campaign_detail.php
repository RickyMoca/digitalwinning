<div class="col-lg-12">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h1 class="card-title"> <i class="icon-info22 mr-2 icon-2x"></i>Detail Promo</h1>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-auto  bg-light border-right-3 border-right-grey px-3 py-3 mt-1">
                    <h1><strong> Coredash</strong></h1>
                    <hr>
                    <h3><i class="icon-cash3 mr-2 icon-2x"></i><strong>Rp.175,000 </strong></h3>
                    <h6><i class="icon-unlink mr-2 icon-2x"></i><strong> </strong>: <a href=""> http://gudangperkakas.com/lp-1</a></h6>
                    <h6><i class="icon-clipboard6 mr-2 icon-2x"></i> <strong>Note </strong>: Beli 1 Gratis 1 Free ongkir</h6>
                    <h5><strong>Status </strong>: Active</h5>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="col-lg-12 mx-auto">
    <div class="card bg-light">
        <div class="card-title px-3 py-1 bg-grey">
            <h1 class="text-light"> <i class="mi-textsms mr-1 mi-3x"></i> <strong>COMMENT</strong></h1>
        </div>

        <div class="card-body bg-light">

            <ul class="mt-5">
                <li class="media">
                    <div class="mr-3 text-grey">
                        <i class="mi-account-circle mi-3x"></i>
                    </div>

                    <div class="media-body">
                        <div class="media-chat-item">Itu maksudnya beli2 gratis 1 pcs coredas gitu ya ?</div>
                        <div class="font-size-sm text-muted mt-2">Mohamad Ricky Mon, 9:54 am </div>
                    </div>
                </li>

                <li class="media media-chat-item-reverse">
                    <div class="media-body">
                        <div class="media-chat-item">Iyups Betul bray</div>
                        <div class="font-size-sm text-muted mt-2">Me Mon, 9:54 am </div>
                    </div>

                    <div class="ml-2 text-blue">
                        <i class="mi-account-circle mi-3x"></i>
                    </div>
                </li>

                <textarea name="enter-message" class="form-control my-3 bg-light" rows="3" cols="1" placeholder="Enter your comment..."></textarea>
                <button type="button" class="btn bg-dark btn-labeled btn-labeled-right float-right"><b><i class="icon-paperplane"></i></b> Send</button>
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



<!-- Primary modal  Edit User-->

<div id="modal_edit" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-slate-600">
                <h6 class="modal-title">Edit user</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">
                <form class="user" method="post" action="<?= base_url('admin/registration'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" disabled="true" id="iduser" name="iduser" value="">
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