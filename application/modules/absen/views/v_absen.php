<div class="col-lg-12">
    <div class="card">
        <div class="card-header header-elements-inline">

            <h3 class="card-title"> <i class="icon-stats-growth mr-3 icon-2x"></i>INFO TRIAL PRODUCT</h3>
            <a href="" class="text-blue" data-toggle="modal" data-target="#modalCampaign">
                <i class="icon-folder-plus2 mr-3 icon-2x" data-popup="tooltip" data-original-title="Add New Campaign"></i>
            </a>

        </div>


        <div class="card-body">
            <table class="table datatable-basic text-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Promo</th>
                        <th scope="col">Price</th>
                        <th scope="col">Note</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $no = '1' ?>
                    <?php foreach ($getuser as $user) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td>Supernat</td>
                            <td>Coredash Beli 2 gratis 1</td>
                            <td>145,000</td>
                            <td>B1G1 pembelian 1 pcs</td>
                            <td> <a href="Http://supernat.id/page2">Http://supernat.id/page2</a></td>

                            <td>
                                <div class="form-check form-check-switchery">
                                    <label class="form-check-label">
                                        <?php if ($user['is_active'] == 1) {
                                            echo ' <input type="checkbox" class="form-check-input-switchery" value="' . $user['is_active'] . '" name="status" checked data-fouc>';
                                        } else {
                                            echo ' <input type="checkbox" class="form-check-input-switchery" value="' . $user['is_active'] . '" name="status" data-fouc>';
                                        } ?>
                                    </label>
                                </div>
                            </td>
                            <td>

                                <a href="campaign/detail" type="button" class="btn btn-sm bg-light" data-popup="tooltip" data-original-title="View More">
                                    <i class="mi-visibility"></i>
                                </a>

                                <button type="button" class="btn btn-sm bg-light" data-popup="tooltip" data-original-title="Result">
                                    <i class="mi-near-me"></i>
                                </button>

                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>


<!-- Primary modal  Add User-->
<div id="modalCampaign" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">

                <h6 class="modal-title"><i class="icon-file-plus2 mr-1 icon-2x"></i> Creat new campaign trial</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">

                <form class="user" method="post" action="<?= base_url('todo/addtodo'); ?>">
                    <div class="form-group">
                        <small class="mb-1 badge badge-light">Campaign Name</small>
                        <input type="text" class="form-control" id="subject" name="subject" value="<?= set_value('subject'); ?>">
                        <!-- form validation -->
                        <?php if (form_error('subject')) : ?>
                            <small class="text-danger"><?= form_error('subject') ?></small>
                        <?php else : ?> <?php endif; ?>
                        <!-- end Form validation -->
                    </div>



                    <div class="form-row mb-4">
                        <div class="col-6">
                            <small class="mb-1 badge badge-light">Select Product Name</small>

                            <select id="id_user" name="user_recived" class="form-control">
                                <?php foreach ($Vuser as $u) : ?>
                                    <option value="<?= $u['id']; ?>"><?= $u['name']; ?><i class="icon-user"></i></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- form validation -->
                            <?php if (form_error('user_recived')) : ?>
                                <small class="text-danger"><?= form_error('user_recived') ?></small>
                            <?php else : ?> <?php endif; ?>
                            <!-- end Form validation -->
                        </div>

                        <div class="col-6">
                            <small class="mb-1 badge badge-light">Discount Price</small>

                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-percent"></i></span>
                                </span>
                                <input type="text" name="duedate" class="form-control daterange-single" value="<?= set_value('duedate'); ?>">
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-link"></i></span>
                            </span>
                            <input type="text" name="duedate" class="form-control" placeholder="Enter Landing Page Link" value="<?= set_value('duedate'); ?>">
                        </div>
                    </div>

                    <div class="form-group">

                        <textarea type="text-area" class="form-control" id="message" name="message" placeholder="Enter your notes for campaign" value=""></textarea>
                        <!-- form validation -->
                        <?php if (form_error('message')) : ?>
                            <small class=" text-danger"><?= form_error('message') ?></small>
                        <?php else : ?> <?php endif; ?>
                        <!-- end Form validation -->
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn bg-primary" data-dismiss="modal">Close</button>
                <button type="submit" id="BtnaddTodo" class="btn bg-slate-600">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Primary modal -->




<script src="<?= base_url(); ?>assets/vendor/js/demo_pages/form_checkboxes_radios.js"></script>
<script>
    $(document).ready(function() {
        var modal = "<?= $this->session->flashdata('modal'); ?>"
        if (modal == "eror") {
            $("#modalCampaign").modal('show');
        }
    });
</script>