<tbody>
							<?php $no = 0; foreach ($content as $row): $no++; ?>
							<tr>
								<td><?= $no ?></td>
								<td>
									<p>
										<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" height="50">
										<?= $row->product_title ?>
									</p>
								</td>
								<td>
									<span class="badge badge-primary"><i class="fas fa-tags"></i> <?= $row->category_title ?></span>
								</td>
								<td>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
								<td><?= $row->is_available ? 'Tersedia' : 'Kosong' ?></td>
								<td>
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