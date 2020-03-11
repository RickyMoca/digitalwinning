 <body>
     <!-- Main navbar -->
     <div class="navbar navbar-expand-md navbar-dark">
         <div class="navbar-brand wmin-0 ml-3 mr-md-auto"></div>
         <div class="my-auto"><i class="mi-streetview mr-1"></i>Digital <strong>Winning </strong></div>

         <div class="d-md-none">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                 <i class="icon-menu3"></i>
             </button>
         </div>

         <div class="collapse navbar-collapse" id="navbar-mobile">
             <ul class="navbar-nav ml-md-auto">
                 <li class="nav-item dropdown dropdown-user mr-4">
                     <a href="#" class="navbar-nav-link" data-toggle="dropdown">
                         <img src="<?= base_url(); ?>assets/vendor/images/placeholders/pic.png" class="rounded-circle" alt="">
                         <span><?= $this->session->userdata('name'); ?></span>
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" id="oke">
                         <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                         <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
     <!-- /main navbar -->


     <!-- Secondary navbar -->
     <div class="navbar navbar-expand-md navbar-light navbar-sticky">
         <div class="text-center d-md-none w-100">
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-navigation">
                 <i class="mi-storage"></i> <strong>MENU</strong>
             </button>
         </div>



         <div class="navbar-collapse collapse" id="navbar-navigation">
             <!-- QUERY MENU -->
             <?php

                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT menu_id,menu FROM `v-access` WHERE role_id = $role_id ORDER BY menu_id ASC";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>

             <!-- LOOPING MENU -->
             <?php foreach ($menu as $m) : ?>

                 <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                 <?php
                    $menuId = $m['menu_id'];
                    $querySubMenu = "SELECT * FROM `v-submenuu` WHERE `is_active` = '1' AND menu_id = $menuId";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                 <?php foreach ($subMenu as $sm) : ?>
                     <ul class="navbar-nav">
                         <?php if ($title == $sm['title']) : ?>
                             <li class="nav-item active">
                             <?php else : ?>
                             <li class="nav-item">
                             <?php endif; ?>
                             <a class="navbar-nav-link" href="<?= base_url($sm['url']); ?>">
                                 <i class="<?= $sm['icon']; ?> mr-1"></i> <?= $sm['title']; ?></a>
                             </li>
                     </ul>
                     <!--/header nav links-->
                 <?php endforeach; ?>
             <?php endforeach; ?>

         </div>
         <!-- Page header -->
         <div class="page-header">
             <div class="page-header-content header-elements-md-inline">

                 <div class="header-elements d-none py-0 mb-3 mb-md-0">
                     <div class="breadcrumb">
                         <a href="<?= base_url('todo'); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                         <span class="breadcrumb-item active"><?= $title ?></span>
                     </div>
                 </div>
             </div>
         </div>
         <!-- /page header -->
     </div>
     <!-- /secondary navbar -->