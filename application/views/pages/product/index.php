<main class="container">
    <div class="row">
        <div class="col-md-12 mb-5 mt-5">
            <div class="card">
                <div class="card-header">
                    <span>Manage Produk</span>

                    <div class="float-end">
                        <form action="<?= base_url("product/search") ?>" method="POST">
                            <div class="input-group">
                                <input type="text" name="keyword" style=" width: 150px; height: 37px;" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
                                <div class="input-group-append">
                                    <button class="btn bg-gradient-dark" style="height:37px;" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="<?= base_url("product/reset") ?>" class="btn bg-gradient-dark" style="height:37px ;">
                                        <i class="fas fa-eraser"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div><br />
                    <a href="<?= base_url('product/create') ?>" class="btn bg-gradient-dark mt-3">Tambah Produk</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align : center;">No</th>
                                <th scope="col" style="text-align : center;">Produk</th>
                                <th scope="col" style="text-align : center;">Kategori</th>
                                <th scope="col" style="text-align : center;">Harga</th>
                                <th scope="col" style="text-align : center;">Stock</th>
                                <th scope="col" style="text-align : center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($content as $row) : $no++; ?>
                                <tr>
                                    <td style="text-align : center;"><?= $no ?></td>
                                    <td>
                                        <p>
                                            <img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" height="50">
                                            <?= $row->product_title ?>
                                        </p>
                                    </td>
                                    <td style="text-align : center;">
                                        <span class="badge bg-primary"><i class="fas fa-tags"></i><?= $row->category_title ?></span>
                                    </td>
                                    <td style="text-align : center;">Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                    <td style="text-align : center;"><?= $row->is_available ? 'Tersedia' : 'Kosong' ?></td>
                                    <td style="text-align : center;">
                                        <?= form_open(base_url("/product/delete/$row->id"), ['method' => 'POST']) ?>
                                        <?= form_hidden('id', $row->id) ?>
                                        <a href="<?= base_url("/product/edit/$row->id") ?>" class="btn btn-sm">
                                            <i class="fas fa-edit text-info"></i>
                                        </a>
                                        <button class="btn btn-sm" type="submit" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                        <?= form_close() ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>

                    </table>

                    <nav aria-label="Page navigation example">
                        <?= $pagination ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</main>