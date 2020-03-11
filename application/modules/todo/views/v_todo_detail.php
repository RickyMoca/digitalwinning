<div class="col-md-10 mx-auto">
    <div class="card">
        <div class="card-header header-elements-inline bg-dark">
            <h3 class="card-title">
                <?php $page = $this->input->get('page') ?>
                <a href="<?= base_url('todo/') . $page ?>" class="text-light">
                    <i class="icon-arrow-left16 icon-2x mr-2"></i></a>
                Back
            </h3>

            <button class="btn copy btn-sm-dark" id="pilih" data-clipboard-text="<?= $detail['subject_todos'] . ' - ' . $detail['reply_todos']; ?>"><i class="icon-stack icon-1x"></i> Copy</button>
        </div>
        <div id="message"></div>
        <div class="card-body bg-light">

            <div class="col-md-12">

                <h1><a href="<?= base_url(); ?>todo/gantiStats?ids=<?= $detail['id_todos'] . '&page=' . $page ?>" class="text-success">
                        <?php if ($detail['status'] == '0') { ?>
                            <i class="icon-checkbox-unchecked2 icon-2x mr-2">
                            <?php } else { ?>
                                <i class="icon-checkbox-checked2 icon-2x mr-2"></i>
                            <?php }; ?>
                            </i></a><strong> <?= $detail['subject_todos']; ?></strong>
                </h1>

                <span class="badge badge-light"><i class="icon-user"></i> From : <?= $detail['name_agent'] ?></span>
                <span class="badge badge-light "><i class="icon-calendar"></i> <?= dateTimeAlfa($detail['due_date']) ?></span>

            </div>

            <hr>

            <div class="col-md-12 border-bottom-2 bg-primary border-warning py-2">
                <span class="badge badge-dark float-right"><?= $detail['name_agent']; ?></span>
                <h5 id="message"><i class="icon-bubble-dots3 mr-2"></i> <?= $detail['message_todos']; ?></h5>
            </div>
            <div class="col-md-12 border-bottom-2 bg-light border-dark py-2">
                <span class="badge badge-dark float-right">Your Reply</span>

                <h5><i class="mi-reply mr-2"></i><?= $detail['reply_todos'] ?></h5>
            </div>

            <form action="<?= base_url('todo/replyTodo') ?>" method="post">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <input hidden name="id_todos" value="<?= $detail['id_todos']; ?>"></input>
                        <div class="form-group-feedback-right">
                            <textarea type="text" class="form-control bg-light form-control-md border-top-1" name="message" placeholder="Reply here . . . . . "></textarea>
                            <div class="form-control-feedback form-control-feedback-md">
                                <button type="submit" class="btn btn-sm my-auto bg-white"><i class="mi-reply mi-1x text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">
    $('#pilih').on('click', function() {

        new ClipboardJS('.copy');
        $.jGrowl('Data Successfuly Copy to Clipboard', {
            theme: 'alert-styled-left bg-info'
        });


    })
</script>