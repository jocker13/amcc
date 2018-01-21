<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header" align="center">ESTIMASI</h2>
	</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">SUMBER DANA</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<?php
			$jml=0;
			foreach ($sd as $val) {
				$jml=$val->banyak*$val->harga_satuan;
				?>
				<tbody>
					<tr>
						<td><?php echo $val->nama_estimasi  ?></td>
						<td><?php echo $val->banyak  ?></td>
						<td><?php echo $val->harga_satuan  ?></td>
						<td><?php echo $jml  ?></td>
						<td align ="center">
							<a href="<?php echo base_url();?>estimasi/edit/<?php echo $val->id ?>" class="btn btn-sm btn-warning ">Edit</a>
							<a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>estimasi/hapus/<?php echo $val->id ?>';}" class="btn btn-sm btn-danger">Hapus</button>
							</td>
						</tr>
					</tbody>
					<?php

				}
				?>
			</table>
		</div>
	</div>
</div>
</div> <!--End .TABEL-->

<div class="row">
	<div class="col-lg-12">
	</br>
</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">SEKRETARIS</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<?php
			$jml=0;
			foreach ($sekertaris as $val) {
				$jml=$val->banyak*$val->harga_satuan;
				?>
				<tbody>
					<tr>
						<td><?php echo $val->nama_estimasi  ?></td>
						<td><?php echo $val->banyak  ?></td>
						<td><?php echo $val->harga_satuan  ?></td>
						<td><?php echo $jml  ?></td>
						<td align ="center">
							<a href="<?php echo base_url();?>estimasi/edit/<?php echo $val->id ?>" class="btn btn-sm btn-warning ">Edit</a>
							<a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>estimasi/hapus/<?php echo $val->id ?>';}" class="btn btn-sm btn-danger">Hapus</button>
							</td>
						</tr>
					</tbody>
					<?php

				}
				?>
			</table>
		</div>
	</div>
</div>
</div> <!--End .TABEL-->


<div class="row">
	<div class="col-lg-12">
	</br>
</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">KONSUMSI</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<tr>
				<td>Makan Siang Pengurus</td>
				<td>5</td>
				<td>10000</td>
				<td>50000</td>
				<th></th>
			</tr>
			<tr>
				<td>Air Mineral</td>
				<td>3</td>
				<td>12000</td>
				<td>36000</td>
				<th></th>
			</tr>
			<tr>
				<td>Snack Tamu Undangan
					<td>100</td>
					<td>5000</td>
					<td>500000</td>
					<th></th>
				</tr>
			</table>
		</div>
	</div>
</div>
</div> <!--End .TABEL-->


<div class="row">
	<div class="col-lg-12">
	</br>
</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">Publikasi dan Dokumentasi</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<tr>
				<td>Cetak Backdrop</td>
				<td>1</td>
				<td>50000</td>
				<td>50000</td>
				<th></th>
			</tr>
			<tr>
				<td>Cetak Poster</td>
				<td>5</td>
				<td>3000</td>
				<td>150000</td>
				<th></th>
			</tr>
		</table>
	</div>
</div>
</div>
</div> <!--End .TABEL-->        

<div class="row">
	<div class="col-lg-12">
	</br>
</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">PERLENGKAPAN</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<tr>
				<td>Sewa Sound System</td>
				<td>1</td>
				<td>50000</td>
				<td>50000</td>
				<th></th>
			</tr>
			<tr>
				<td>Sewa HT</td>
				<td>5</td>
				<td>3000</td>
				<td>150000</td>
				<th></th>
			</tr>
		</table>
	</div>
</div>
</div>
</div> <!--End .TABEL-->  

<div class="row">
	<div class="col-lg-12">
	</br>
</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">ACARA</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<tr>
				<td>Fee Penghibur Acara</td>
				<td>1</td>
				<td>50000</td>
				<td>50000</td>
				<th></th>
			</tr>
			<tr>
				<td>Doorprize</td>
				<td>5</td>
				<td>3000</td>
				<td>150000</td>
				<th></th>
			</tr>
		</table>
	</div>
</div>
</div>
</div> <!--End .TABEL--> 

<div class="row">
	<div class="col-lg-12">
	</br>
</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">HUMAS</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<tr>
				<td>Transportasi</td>
				<td>1</td>
				<td>50000</td>
				<td>50000</td>
				<th></th>
			</tr>
			<tr>
				<td>Pulsa</td>
				<td>5</td>
				<td>3000</td>
				<td>150000</td>
				<th></th>
			</tr>
		</table>
	</div>
</div>
</div>
</div> <!--End .TABEL-->        
<div class="row">
	<div class="col-lg-12">
	</br>
</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th rowspan="2" style="background: darkorange; text-align: center;">KESEKRETARIATAN</th>
					<th colspan="3" style="background: darkorange; text-align: center;">ESTIMASI</th>
					<th rowspan="2" style="background: darkorange; text-align: center;">AKSI</th>
				</tr>

				<td style="background: darkorange; text-align: center;"><b>BANYAK</b></td>
				<td style="background: darkorange; text-align: center;"><b>HARGA SATUAN</b></td>
				<td style="background: darkorange; text-align: center;"><b>JUMLAH</b></td>
			</tr>

			<tr>
				<td>Print Warna</td>
				<td>5</td>
				<td>10000</td>
				<td>50000</td>
				<th></th>
			</tr>
			<tr>
				<td>Fotocopy</td>
				<td>3</td>
				<td>12000</td>
				<td>36000</td>
				<th></th>
			</tr>
			<tr>
				<td>Cetak Sertifikat</td>
				<td>100</td>
				<td>5000</td>
				<td>500000</td>
				<th></th>
			</tr>
		</table>
	</div>
</div>
</div>
</div> <!--End .TABEL-->


        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="" >
				<h5 class="modal-title" id="exampleModalLabel">INPUT DATA ESTIMASI</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>NAMA KEGIATAN</label>

						<select class="form-control" name="id_kegiatan" >
							<?php 
							foreach ($kegiatan as $nama) {
								
								?>
								<option value="<?php echo $nama->id ?>" ><?php echo $nama->nama_kegiatan; ?></option>
								
								<?php 

							}
							?>
							<!-- <input type="hidden" name="id_kegiatan" value="<?php echo $nama->id ?>"> -->
						</select>
					</div>
					<div class="form-group">
						<label>Nama Sie</label>
						<select class="form-control" name="namasie">
							<option>SUMBER DANA</option>
							<option>SEKRETARIS</option>
							<option>KONSUMSI</option>
							<option>PDD</option>
							<option>PERLENGKAPAN</option>
							<option>ACARA</option>
							<option>HUMAS</option>
							<option>KESEKRETARIATAN</option>
						</select>
					</div>					
					<div class="form-group">
						<label for="namatransaksi-name" class="form-control-label">Nama Transaksi</label>
						<input type="text" class="form-control" id="recipient-name" required>
					</div>

					<div class="form-group">
						<label for="banyak-name" class="form-control-label">Banyak</label>
						<input type="text" class="form-control" id="recipient-name" required>
					</div>
					<div class="form-group">
						<label for="r-name" class="form-control-label">Harga Satuan</label>
						<input type="text" class="form-control" id="recipient-name" required>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>











