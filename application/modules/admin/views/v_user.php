<div class="col-lg-12">
    <div class="card" style="">
        <div class="card-header header-elements-inline">
            <h3 class="card-title">User Management</h3>
            <a href="" class="text-dark" data-toggle="modal" data-target="#modal_theme_primary">
                <i class="icon-user-plus mr-3 icon-2x"></i>
            </a>

        </div>


        <div class="card-body">
            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $no = '1' ?>
                    <?php foreach ($getuser as $user) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $user['name']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['role']; ?></td>
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

                                <button type="button" class="btn btn-sm bg-dark" data-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-spinner4"></i>
                                </button>

                                <div class="dropdown-menu" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(56px, 36px, 0px);">
                                    <a href="<?= base_url(); ?>admin/deletuser?id=<?= $user['id']; ?>" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                    <a href="<?= base_url(); ?>admin?id=<?= $user['id']; ?>" data-toggle="modal" data-target="#modal_edit" class="dropdown-item"><i class="icon-screen-full"></i> Edit</a>

                                </div>

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