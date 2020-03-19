<div class="col-lg-11 mx-auto">
    <div class="card">
        <div class="card-header header-elements-inline">
            <em>
                <h1 class="text-danger"><strong><i class="icon-quill4  icon-2x"></i>Followup text</strong></h1>
            </em>
            <h6 class="card-title"></h6>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <!--  -->
        <?php foreach ($autotext as $fu) : ?>
            <div class="card-body" data-toggle="context" data-target=".context-show-menu">
                <label class="badge badge-info">
                    <h6 class="mb-2 my-auto"> # Followup 1</h6>
                </label>
                <pre class="language-javascript code-toolbar"><?= $fu['fu1']; ?><div class="toolbar"><div class="toolbar-item"><button class="btn btn-light">Copy</button></div></div></pre>
            </div>

            <div class="card-body" data-toggle="context" data-target=".context-show-menu">
                <label class="badge badge-info">
                    <h6 class="mb-2 my-auto"> # Followup 2</h6>
                </label>
                <pre class="language-javascript code-toolbar"><?= $fu['fu2']; ?><div class="toolbar"><div class="toolbar-item"><button class="btn btn-light">Copy</button></div></div></pre>
            </div>

            <div class="card-body" data-toggle="context" data-target=".context-show-menu">
                <label class="badge badge-info">
                    <h6 class="mb-2 my-auto"> # Followup 3</h6>
                </label>
                <pre class="language-javascript code-toolbar"><?= $fu['fu3']; ?><div class="toolbar"><div class="toolbar-item"><button class="btn btn-light">Copy</button></div></div></pre>
            </div>

            <div class="card-body" data-toggle="context" data-target=".context-show-menu">
                <label class="badge badge-info">
                    <h6 class="mb-2 my-auto"> # Followup 4</h6>
                </label>
                <pre class="language-javascript code-toolbar"><?= $fu['fu4']; ?><div class="toolbar"><div class="toolbar-item"><button class="btn btn-light">Copy</button></div></div></pre>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- <code> Silahkan lakuan followup pertama dengan mengirimkan text berikut.</code> -->