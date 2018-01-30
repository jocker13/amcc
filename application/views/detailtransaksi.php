<?php 
$op;
$id = "";
$nama_sie ="";
$nama_transaksi = "";
$banyak = "";
$harga_satuan = "";
$no_nota = "";
if ($op=='edit')
{
  foreach ($sql as $val) {
    $op = "edit";
    $id = $val->id;
    $nama_sie = $val->nama_sie;
    $nama_transaksi = $val->nama_transaksi;
    $banyak = $val->banyak;
    $harga_satuan = $val->harga_satuan;
    $no_nota = $val->no_nota;
    //$no_telp = $val->no_telp;
  }
}
?>


<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header" align="center">DETAIL TRANSAKSI</h2>
	</div>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<form class="navbar-form navbar-right" role="search">
				<div class="input-group">
					<input class="form-control  type="text" placeholder="nama transaksi" name="srch-term" id="srch-term">
					<div class="input-group-btn">
						<button class="btn btn-warning type=" submit="" "=""><i class="glyphicon glyphicon-search "></i>
						</button>
					</div>
				</div>
			</form>
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th style="background: deepskyblue; text-align: center;">NO</th>
					<th style="background: deepskyblue; text-align: center;">NAMA SIE</th>
					<th style="background: deepskyblue; text-align: center;">NAMA TRANSAKSI</th>
					<th style="background: deepskyblue; text-align: center;"><b>BANYAK</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>HARGA SATUAN</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>JUMLAH</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>NO. NOTA</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>AKSI</b></th>
					<?php
					$no=0;
					foreach ($sql as $detail) {
						$jml=$detail->banyak*$detail->harga_satuan;
						$no++;
						?>
						<tbody>
							<tr>
								<td><?php echo $no  ?> </td>
								<td><?php echo $detail->nama_sie ?> </td>
								<td><?php echo $detail->nama_transaksi ?> </td>
								<td><?php echo $detail->banyak ?> </td>
								<td>Rp <?php echo number_format($detail->harga_satuan,2,',','.') ?> </td>
								<td>Rp <?php echo number_format($jml,2,',','.') ?> </td>
								<td><?php echo $detail->no_nota ?> </td>

								<td>
									<a href="<?php echo base_url();?>User/edit/<?php echo $detail->id ?>" class="btn btn-sm btn-warning ">Edit</a>
									<a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>detailtransaksi/hapus/<?php echo $detail->id ?>';}" class="btn btn-sm btn-danger">Hapus</button> </td>
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



        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header" style="" >
				<h5 class="modal-title" id="exampleModalLabel">INPUT DATA DETAIL TRANSAKSI</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form role="form"  action="<?php echo base_url(); ?>detailtransaksi/simpan" method="POST">
					
              <input type="hidden" name="op" value="<?php echo $op ?>" class="form-control">
              <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
					<div class="form-group">
						<label>Nama Sie</label>
						<select class="form-control" name="nama_sie">
							<option>SUMBER DANA</option>
							<option>SEKERTARIS</option>
							<option>KONSUMSI</option>
							<option>PDD</option>
							<option>INVENTARIS</option>
							<option>PSDM</option>
						</select>
					</div>					
					<div class="form-group">
						<label for="namatransaksi-name" class="form-control-label">Nama Transaksi</label>
						<input type="text" class="form-control" id="recipient-name" name="nama_transaksi" required>
					</div>

					<div class="form-group">
						<label for="banyak-name" class="form-control-label">Banyak</label>
						<input type="text" class="form-control" id="recipient-name" name="banyak" required>
					</div>
					<div class="form-group">
						<label for="r-name" class="form-control-label">Harga Satuan</label>
						<input type="text" class="form-control" id="recipient-name" name="harga_satuan" required>
					</div>
					<div class="form-group">
						<label for="r-name" class="form-control-label">NO. NOTA</label>
						<input type="text" class="form-control" id="recipient-name" name="no_nota" required>
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











