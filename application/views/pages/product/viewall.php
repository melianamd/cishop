<main class="container">
    <?php $this->load->view('/layouts/_alert') ?>
    <div class="row">
        <div class="col-md-12 mb-1 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 style="text-align: center;">Semua Produk</h4>
                    <hr class="horizontal dark mt-lg-2 mt-1 mb-sm-4 mb-1" style="width:50%; margin:auto">
                </div>



                <div class="row mb-4">
                    <?php foreach ($content as $row) : ?>
                        <div class="col-lg-3 mb-lg-0 mb-3 mt-1">
                            <div class="card">
                                <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                    <a href="javascript:;" class="d-block">
                                        <img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" style="height: 265px;" class="img-fluid border-radius-lg shadow mx-auto d-block">
                                    </a>
                                </div>
                                <div class="card-body pt-3">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-sm"><?= $row->product_title ?></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="mb-0 font-weight-bolder"><strong>Rp<?= number_format($row->price, 0, ',', '.') ?> ,- </strong></h5>
                                    </div>

                                    <form action="<?= base_url("/cart/add") ?>" method="POST">
                                        <input type="hidden" name="id_product" value="<?= $row->id ?>">
                                        <div class="input-group">
                                            <input type="number" name="qty" value="1" class="form-control mb-1 mt-1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark mb-1 mt-1">Add to Cart</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div> <br /><!-- div card-->
                        </div>
                    <?php endforeach ?>
                </div> <!-- div row-->


            </div>
        </div>

</main>