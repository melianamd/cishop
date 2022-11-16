<main class="container min-vh-75">
    <?php $this->load->view('layouts/_alert');
    ?>
    <div class="row">
        <div class="col-md-12 mb-5 mt-5">
            <div class="row"> 
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="<?= $content->image ? base_url("/images/user/$content->image") : base_url("/images/user/avatar.png") ?>" alt="" height="200">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <p>Nama : <?= $content->name ?></p>
                            <p>E-mail : <?= $content->email ?></p>
                            <a href="<?= base_url("/profile/update/$content->id") ?>" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>