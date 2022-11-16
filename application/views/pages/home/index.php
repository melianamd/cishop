<main role="main">
  <?php $this->load->view('layouts/_alert') ?>
  <header class="">
    <div class="page-header min-vh-75">
      <span class="mask bg-gradient-info opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 my-auto text-white text-xl-left">
            <h1 class="text-dark display-2 
 font-weight-bolder mb-4">Find your own happiness</h1>
            <p class="text-dark mb-0">Get 50% Off for your first purchase</p>
            <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Shop now</button>
          </div>
          <div class="col-lg-6">
            <div class="positio-absolute rounded-circle end-4 top-0 mt-n4 shadow-lg d-xl-block d-none" style="background-image: url('<?= BASE_URL() ?>/images/banner2.jpg');width: 600px;height: 600px; background-position: center;background-size: cover;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row bg-white shadow mt-n5 border-radius-lg pb-4 p-3 mx-sm-0 mx-1 position-relative z-index-2">
        <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
          <div class="d-flex align-items-center">
            <i class="fa fa-shopping-bag fa-2x text-dark" aria-hidden="true"></i>
            <div class="ms-3">
              <h6 class="mb-0">New Arrivals Every Week</h6>
              <p class="text-sm mb-0">Produk baru akan dirilis setiap hari Jumat pukul 10.00 WIB</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
          <div class="d-flex align-items-center">
            <i class="fa fa-bus fa-2x text-dark" aria-hidden="true"></i>
            <div class="ms-3">
              <h6 class="mb-0">Shipping Discount</h6>
              <p class="text-sm mb-0">Diskon biaya pengiriman 10% jika belanja melalui website</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
          <div class="d-flex align-items-center">
            <i class="fa fa-suitcase fa-2x text-dark" aria-hidden="true"></i>
            <div class="ms-3">
              <h6 class="mb-0">Exchange & Return</h6>
              <p class="text-sm mb-0">Kesalahan dalam pengiriman produk berlaku klaim 1x24 jam</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
          <div class="d-flex align-items-center">
            <i class="fa fa-credit-card fa-2x text-dark" aria-hidden="true"></i>
            <div class="ms-3">
              <h6 class="mb-0">Multiple Payment</h6>
              <p class="text-sm mb-0">Bank Transfer, Virtual Account, Indomaret/Alfamart, OVO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="pt-6 pb-4">
    <div class="container">

      <div class="row mb-4">
        <div class="col-12 text-center">
          <h3 class="mb-5" spellcheck="false">New Arrivals</h3>
        </div>
        <?php foreach ($content as $row) : ?>
          <div class="col-lg-3 mb-lg-0 mb-4">
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
            </div> <!-- div card-->
          </div>
        <?php endforeach ?>
      </div> <!-- div row-->
    </div>

    <div class="col-12 mt-5 text-center">
      <a href="<?= base_url("/allproduct") ?>" class="btn bg-gradient-dark">View All</a>
    </div>
    </div>
    </div>
  </section>

  <section class="mt-2 py-5 bg-gradient-dark position-relative" style="background-image:url(<?php base_url(); ?>images/footer.png);  background-position: center; height: 570px;">
  </section>


  </div>
</main>