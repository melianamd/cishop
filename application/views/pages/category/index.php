<main class="container min-vh-75">
	<div class="row">
		<div class="col-md-12 mb-5 mt-5">
			<div class="card mb-3">
				<div class="card-header">
					<span>Kategori</span>

					<div class="float-end">
						<?= form_open(base_url('category/search'), ['method' => 'POST']) ?>
						<div class="input-group">
							<input type="text" name="keyword" style=" width: 150px; height: 37px;" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
							<div class="input-group-append">
								<button class="btn bg-gradient-dark" style="height:37px;" type="submit">
									<i class="fas fa-search"></i>
								</button>
								<a href="<?= base_url('category/reset') ?>" class="btn bg-gradient-dark" style="height:37px ;">
									<i class="fas fa-eraser"></i>
								</a>
							</div>
						</div>
						<?= form_close() ?>
					</div><br />
					<a href="<?= base_url('category/create') ?>" class="btn bg-gradient-dark mt-3">Tambah Kategori</a>
				</div>



				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" style="text-align : center;">No.</th>
								<th scope="col" style="text-align : center;">Title</th>
								<th scope="col" style="text-align : center;">Slug</th>
								<th scope="col" style="text-align : center;">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0;
							foreach ($content as $row) :  $no++; ?>
								<tr>
									<td style="text-align : center;"><?= $no ?></td>
									<td style="text-align : center;"><?= $row->title ?></td>
									<td style="text-align : center;"><?= $row->slug ?></td>
									<td style="text-align : center;">
										<?= form_open("category/delete/$row->id", ['method' => 'POST']) ?>
										<?= form_hidden('id', $row->id) ?>
										<a href="<?= base_url("category/edit/$row->id") ?>" class="btn btn-sm">
											<i class="fas fa-edit text-gradient-dark"></i>
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