<div class="col-md-12 mx-auto">
    <div class="card">
        <div class="card-header header-elements-inline bg-dark">

            <h3 class="card-title"><i class="icon-drawer-in icon-2x mr-2"></i>On Hold Parcel Ninja</h3>

        </div>
        <div id="message"></div>
        <div class="card-body bg-light">

            <!-- Header Tabs -->
            <ul class="nav nav-tabs nav-tabs-highlight-dark nav-justified col-md-8" id="tbs">
                <li class="nav-item"><a href="#todo1" class="nav-link active" data-toggle="tab">
                        <i class="icon-user mr-1"></i>My Todos
                        <span class="badge bg-dark badge-pill ml-2" id="bg-1"></span></a>
                </li>
                <li class="nav-item"><a href="#todo2" class="nav-link" data-toggle="tab">
                        <i class="mi-block mr-1"></i>No Response
                        <span class="badge bg-danger badge-pill ml-2" id="bg-3"></span></a>
                </li>
                <li class="nav-item"><a href="#todo3" class="nav-link" data-toggle="tab">
                        <i class="icon-clipboard2 mr-1"></i>Completed
                        <span class="badge bg-success badge-pill ml-2" id="bg-2"></span></a>
                </li>
            </ul>
            <!--/Header Tabs -->


            <!-- tabs content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="todo1">No data</div>
                <div class="tab-pane fade" id="todo2">No data</div>
                <div class="tab-pane fade" id="todo3">No data</div>
            </div>
            <!-- /tabs content -->

        </div>
    </div>
</div>




<script src="<?= base_url(); ?>assets/js/custom.js"></script>

<script>
    $(document).ready(function() {
        var modal = "<?= $this->session->flashdata('modal'); ?>"
        if (modal == "eror") {
            $("#m_addtodo").modal('show');
        }
        myTodo();

    });
</script>