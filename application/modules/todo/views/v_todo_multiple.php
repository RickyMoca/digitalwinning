<div class="col-md-12 mx-auto">
    <div class="card">

        <div id="message"></div>
        <div class="card-body bg-light">



            <!-- tabs content -->
            <div class="tab-content">

                <div class="input-group mb-3 row-md-1 float-right">
                        <button class="btn btn-dark btn-sm col-1">Add new Rows</button>
                        <input type="number" class="col-1 text-center text-bold" max="10" maxlength="1""></input>
                        <span class="input-group-prepend ">
                        </span>
                   
                </div>

                <table class="col-md-10 float-center" border="0">
                    <th>SUBJECT</th>
                    <th>ASSIGN TO</th>
                    <th>DUE DATE</th>
                    <th>MESSAGE</th>
                    <tr>
                        <td> <input type="text" class="form-control" id="subject" name="subject" value="" placeholder="Subject"></td>
                        <td><select id="id_user" name="user_recived" class="form-control">
                                <?php foreach ($Vuser as $u) : ?>
                                    <option value="<?= $u['id']; ?>"><?= $u['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                                <input type="text" name="duedate" class="form-control daterange-single" value="">
                            </div>
                        </td>
                        <td><input type="text-area" class="form-control" id="message" name="message" placeholder="Enter name" value="" required="hh"></input></td>
                    </tr>
                    <tfoot class="text-right">
                        <tr>
                            <th colspan="4"><button class="btn btn-dark btn-sm mt-2">Save</button></th>
                        </tr>
                    </tfoot>
                </table>
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
    });
</script>