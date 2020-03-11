<!-- Page content -->
<div class="page-content pt-0">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content mt-3">
            <div class="col-md-10 mx-auto text-center">
                <div data-alert="okebro"></div>
            </div>
            <div class="row mx-auto">
                <?= $load_content; ?>
            </div>
        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->
</div>

<!-- /page content -->
<script>
    $(document).ready(function() {
        // Right (default)
        var types = "<?= $this->session->flashdata('type'); ?>"
        var message = "<?= $this->session->flashdata('message'); ?>"

        if (message != "") {
            if (types == 'success') {
                $.jGrowl(message, {
                    header: 'Congratulation',
                    theme: 'alert-styled-left bg-success'
                });
            } else if (types == 'danger') {
                $.jGrowl(message, {
                    header: 'Upps Sorry !',
                    theme: 'alert-styled-left bg-danger'
                });
            } else {
                $.jGrowl(message, {
                    theme: 'alert-styled-left bg-info'
                });
            }
        }
    });
</script>