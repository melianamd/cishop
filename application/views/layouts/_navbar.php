<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white py-3">
  <div class="container">
    <a class="navbar-brand w-8" href="#" data-config-id="brand">
      <img src="<?= base_url('') ?>images/logo2.jpg" width="150" alt="" class="mb-2">
    </a>


    <div class="menu collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation" aria-labelledby="dropdown-2">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <li class="nav-item mx-2">
          <a href="<?= base_url('') ?>" class="nav-link ps-2 cursor-pointer">
            Home
          </a>
        </li>
        <li class="nav-item active"><a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
          <ul class="submenu">
            <?php foreach (getCategories() as $category) : ?>
              <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
        <li class="nav-item mx-2 nav-item">
          <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Urutkan Harga</a>
          <ul class="submenu">
            <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/shop/sortby/asc") ?>">Termurah</a></li>
            <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/shop/sortby/desc") ?>">Termahal</a></li>
          </ul>
        </li>
        <li class="nav-item mx-2">
          <a href="<?= base_url('/about') ?>" class="nav-link ps-2 cursor-pointer">
            About
          </a>
        </li>
        <li class="nav-item mx-2">
          <a href="<?= base_url('/contact') ?>" class="nav-link ps-2 cursor-pointer">
            Contact Us
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <form action="<?= base_url("/shop/search") ?>" method="POST">
          <div class="input-group mt-2">
            <input type="text" class="form-control mb-1 mt-1" name="keyword" placeholder="Cari" style=" width: 150px; height: 37px;">
            <div class="input-group-append">
              <button class="btn bg-gradient-dark mb-1 mt-1" type="submit" style="height:37px ;">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <li class="nav-item mx-2  mt-2">
          <a href="<?= base_url('cart') ?>" class="nav-link ps-2 cursor-pointer">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i> Cart (<?= getCart(); ?>)
          </a>
        </li>

        <?php if (!$this->session->userdata('is_login')) : ?>
          <li class="nav-item ms-2  mt-2">
            <a href="<?= base_url('/login') ?>" class="btn bg-gradient-dark mb-0" style="height: 37px;">
              Login
            </a>
          </li>

        <?php elseif ($this->session->userdata('is_login') && $this->session->userdata('role') == 'admin') : ?>

          <div class="menu mx-2  mt-2" aria-labelledby="dropdown-2">
            <ul class="navbar-nav me-auto">
              <li class="nav-item active mb-3"><a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('name') ?></a>
                <ul class="submenu">
                  <li class="nav-item active"><a class="dropdown-item" href="<?= base_url('/profile') ?>">Profil</a></li>
                  <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/myorder") ?>">My Order</a></li>
                  <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/category") ?>">Manage Kategori</a></li>
                  <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/product") ?>">Manage Produk</a></li>
                  <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/order") ?>">Manage Order</a></li>
                  <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/user") ?>">Manage User</a></li>
                  <li class="nav-item active"><a class="dropdown-item" href="<?= base_url('/logout') ?>">Logout</a></li>
                </ul>
              </li>

            <?php else : ?>
              <div class="menu mx-2  mt-2" aria-labelledby="dropdown-2">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item active mb-3"><a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('name') ?></a>
                    <ul class="submenu">
                      <li class="nav-item active"><a class="dropdown-item" href="<?= base_url('/profile') ?>">Profil</a></li>
                      <li class="nav-item active"><a class="dropdown-item" href="<?= base_url("/myorder") ?>">My Order</a></li>
                      <li class="nav-item active"><a class="dropdown-item" href="<?= base_url('/logout') ?>">Logout</a></li>
                    </ul>
                  </li>
                <?php endif ?>


                </ul>
              </div>
            </ul>
          </div>
    </div>
</nav>