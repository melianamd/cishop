<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Thrift Bymelys</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
        </li>
        
    <div class="menu" aria-labelledby="dropdown-1">
        <ul class="navbar-nav me-auto">
          <li class="nav-item active"><a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
            <ul class="submenu">
             <li class="nav-item active"><a class="dropdown-item" href="<?= base_url('category') ?>">Kategori</a></li>
             <li class="nav-item active"><a class="dropdown-item" href="/admin-product.html">Produk</a></li>
             <li class="nav-item active"><a class="dropdown-item" href="/admin-order.html">Order</a></li>
             <li class="nav-item active"><a class="dropdown-item" href="/admin-users.html">Pengguna</a></li>
            </ul>
         </li>
        </ul>
    </div>
    </ul>
      
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="/cart.html" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
      </li>
      <?php if (!$this->session->userdata('is_login')) : ?>
      <li class="nav-item">
        <a href="<?= base_url('/login') ?>" class="nav-link">Login</a>
      </li>

      <li class="nav-item">
        <a href="<?= base_url('/register') ?>" class="nav-link">Register</a>
      </li>
      <?php else : ?>
      <div class="menu" aria-labelledby="dropdown-2">
        <ul class="navbar-nav me-auto">
          <li class="nav-item active"><a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('name') ?></a>
            <ul class="submenu">
             <li class="nav-item active"><a class="dropdown-item" href="/profil.html">Profil</a></li>
             <li class="nav-item active"><a class="dropdown-item" href="/orders.html">Order</a></li>
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