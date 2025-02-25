<!doctype html>
<html lang="id">

<head></head>

<body>
	<!--Main layout-->
	<main>
		<div class="container pt-4">
			<section class="mb-4">
				<table width="100%" style="vertical-align: middle; font-size: 12pt; color: #000000;page-break-inside:avoid">
					<tr>
						<td width="100%" colspan="6" style="text-align: center;">
							<div style="font-size: 13pt; font-weight: bold;">IBMAETER INDONESIA</div>
							<div style="font-weight: 200;">Website Inventaris Barang Gudang dan Manajemen Pekerja Terbaru</div>
							<div style="font-weight: 200;">Telp. 031-4614099 Fax. 5619082 / Email : ibmaeter@ibweb.ac.id</div>
						</td>
					</tr>
				</table>

				<div class="card" style="margin-top: 58px">
					<div class="card-header text-center py-3">
						<h3 class="mb-0 text-center">
							<center><strong>Tabel Perizinan Barang</strong></center>
						</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<?php if (session('role') == 0) : ?>
									<table style="font-size: 14px; width:100%;" border="1">
										<thead>
											<tr>
												<th>Waktu</th>
												<th>Pekerja</th>
												<th>Barang</th>
												<th>Request</th>
												<th>Stok</th>
												<th>Status</th>
												<th>Keterangan</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($log_item as $log) : ?>
												<tr>
													<td><?= $log['tgl']; ?></td>
													<td><?= $log['nama']; ?></td>
													<td><?= $log['nama_item']; ?></td>
													<td>
														<?php if ($log['request'] == "Masuk") : ?>
															<?= $log['request']; ?>
														<?php else : ?>
															<?= $log['request']; ?>
														<?php endif; ?>
													</td>
													<td style="width: 75px;">
														<?= $log['ubah_stok']; ?>
													</td>
													<td>
														<?php
														if ($log['status'] == 'Diterima') {
															echo "DITERIMA";
														} elseif ($log['status'] == 'Ditolak') {
															echo "DITOLAK";
														} else {
															echo "PENDING";
														}
														?>
													</td>
													<td><?= $log['ket']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<!-- for pekerja -->
								<?php else : ?>
									<table style="font-size: 14px; width:100%;" border="1">
										<thead>
											<tr>
												<th>Waktu</th>
												<th>Pekerja</th>
												<th>Barang</th>
												<th>Request</th>
												<th>Stok</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($log_item as $log) : ?>
												<tr>
													<td><?= $log['tgl']; ?></td>
													<td><?= $log['nama']; ?></td>
													<td><?= $log['nama_barang']; ?></td>
													<td>
														<?php if ($log['request'] == "Masuk") : ?>
															<?= $log['request']; ?>
														<?php else : ?>
															<?= $log['request']; ?>
														<?php endif; ?>
													</td>
													<td style="width: 75px;">
														<?= $log['ubah_stok']; ?>
													</td>
													<td>
														<?php
														if ($log['status'] == 'Diterima') {
															echo "DITERIMA";
														} elseif ($log['status'] == 'Ditolak') {
															echo "DITOLAK";
														} else {
															echo "PROSES";
														}
														?>
													</td>
													<td><?= $log['ket']; ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div><br>

				<table width="100%" style="vertical-align: middle; font-size: 12pt; color: #000000;page-break-inside:avoid">
					<tr>
						<td width="70%" colspan="6" style="text-align: center;"></td>
						<td width="30%" style="text-align: right;">
							<h4 style="margin-bottom: 30px;">
								Founder Ibmaeter,
							</h4>
							<u>
								<h5>Alfha Fierly Firdaus</h5>
							</u>
						</td>
					</tr>
				</table>
			</section>
		</div><br>
	</main>
</body>

</html>