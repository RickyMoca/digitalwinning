<form method="post" action="<?= site_url('auth') ?>">

  <div class=" form-group form-group-feedback form-group-feedback-left">
    <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email...">
    <div class="form-control-feedback"><i class="icon-mention text-muted"></i>
    </div>
    <!-- form validation -->
    <?php if (form_error('email')) : ?>
      <small class="text-danger"><?= form_error('email') ?></small>
    <?php else : ?> <?php endif; ?>
    <!-- end Form validation -->
  </div>

  <div class="form-group form-group-feedback form-group-feedback-left">
    <input type="password" class="form-control" name="password" placeholder="Enter your Password...">
    <div class="form-control-feedback"><i class="icon-lock2 text-muted"></i></div>
    <!-- form validation -->
    <?php if (form_error('password')) : ?>
      <small class="text-danger"><?= form_error('password') ?></small>
    <?php else : ?> <?php endif; ?>
    <!-- end Form validation -->
  </div>


  <div class="form-group">
    <button type="submit" class="btn btn-dark btn-block">SIGN IN <i class="icon-circle-right2 ml-2"></i></button>
  </div>

</form>