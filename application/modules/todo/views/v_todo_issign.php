<div class="col-md-12  mx-auto mb-2">
    <div class="float-right">
        <!-- search -->
        <div class="float-right">

            <div class="input-group">

                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-search4"></i></span>
                </span>
                <input type="text" name="search" class="form-control" placeholder="Cari disni">
            </div>
        </div>
        <!-- /search -->
    </div>
</div>
<div class="col-md-12 mx-auto">
    <div class="card">

        <div class="card-header header-elements-inline bg-dark">

            <h3 class="card-title"><i class="icon-drawer-in icon-2x mr-2"></i>On Hold Parcel Ninja</h3>
            <a href="#" data-toggle="modal" data-target="#m_addtodo" class="text-light"><i class="mi-add-box mi-2x"></i> Add New</a>



        </div>
        <div id="message"></div>
        <div class="card-body bg-light">

            <!-- Header Tabs -->
            <ul class="nav nav-tabs nav-tabs-highlight-dark nav-justified col-md-8" id="tbs">
                <li class="nav-item"><a href="#tab1_issign" class="nav-link" data-toggle="tab">
                        <i class="icon-paperplane mr-1"></i>All I Assign
                        <span class="badge bg-primary badge-pill ml-2" id="issigned-bg-1"></span></a>
                </li>
                <li class="nav-item"><a href="#tab2_issign" class="nav-link active" data-toggle="tab">
                        <i class="icon-user mr-1"></i>Todos On
                        <span class="badge bg-dark badge-pill ml-2" id="issigned-bg-2"></span></a>
                </li>
                <li class="nav-item"><a href="#tab3_issign" class="nav-link" data-toggle="tab">
                        <i class="mi-block mr-1"></i>No Response
                        <span class="badge bg-danger badge-pill ml-2" id="issigned-bg-3"></span></a>
                </li>
                <li class="nav-item"><a href="#tab4_issign" class="nav-link" data-toggle="tab">
                        <i class="icon-clipboard2 mr-1"></i>Completed
                        <span class="badge bg-success badge-pill ml-2" id="issigned-bg-4"></span></a>
                </li>
            </ul>
            <!--/Header Tabs -->

            <!-- tabs content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1_issign">No data</div>
                <div class="tab-pane fade" id="tab2_issign">No data</div>
                <div class="tab-pane fade" id="tab3_issign">No data</div>
                <div class="tab-pane fade" id="tab4_issign">No data</div>
            </div>
            <!-- /tabs content -->
        </div>
    </div>
</div>



<!-- Primary modal  Add User-->
<div id="m_addtodo" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">

                <h6 class="modal-title"><i class="icon-file-plus2 mr-1 icon-2x"></i> Creat new todo</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">

                <form class="user" method="post" action="<?= base_url('todo/addtodo'); ?>">
                    <div class="form-group">
                        <small class="mb-1 badge badge-light">Subject Your Todos</small>
                        <input type="text" class="form-control" id="subject" name="subject" value="<?= set_value('subject'); ?>">
                        <!-- form validation -->
                        <?php if (form_error('subject')) : ?>
                            <small class="text-danger"><?= form_error('subject') ?></small>
                        <?php else : ?> <?php endif; ?>
                        <!-- end Form validation -->
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-6">
                            <small class="mb-1 badge badge-light"><i class="icon-user"></i> Select yout todo assign to ?</small>

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
                            <small class="mb-1 badge badge-light">Due Date</small>

                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                                <input type="text" name="duedate" class="form-control daterange-single" value="<?= set_value('duedate'); ?>">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <small class="mb-1 badge badge-light">Please enter your message todo</small>

                        <textarea type="text-area" class="form-control" id="message" name="message" placeholder="Enter name" value="oke" required="hh"> </textarea>
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


<script src="<?= base_url(); ?>assets/js/custom.js"></script>

<script>
    $(document).ready(function() {
        var modal = "<?= $this->session->flashdata('modal'); ?>"
        if (modal == "eror") {
            $("#m_addtodo").modal('show');
        }
        myIssigned();
    });
</script>