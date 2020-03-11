<body>
  <!-- Page content -->
  <div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content area -->
      <div class="content d-flex justify-content-center mt-5">
        <div class="login-form">
          <div class="card mb-0">
            <div class="card-body">
              <div class="text-center mb-3">

                <i class="icon-lock icon-2x text-slate-300 border-slate-200 border-3 rounded-round p-2 mb-2 mt-1"></i>
                <!-- <h5 class="mb-0">Login to your account</h5> -->
                <span class="d-block text-muted">Enter your credentials below</span>
              </div>

              <!-- Login form -->
              <?= $load_content ?>
              <!-- /login form -->

            </div>
          </div>
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
            header: 'INFO!',
            theme: 'alert-styled-left bg-info'
          });
        }
      }
    });
  </script>