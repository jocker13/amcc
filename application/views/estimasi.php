<?php 
    $op;
    $id = "";
    $jenis = "";
    $nama_sie = "";
    $nama_estimasi ="";
    $banyak = "";
    $harga_satuan = "";


if ($op=='edit')
 {
    foreach ($sql as $val) {
      $op = "edit";                                                                                                           
      $id = $val->id;
      $jenis = $val->jenis;
      $nama_sie = $val->nama_sie;
      $nama_estimasi = $val->nama_estimasi;
      $banyak = $val->banyak;
      $harga_satuan = $val->harga_satuan;

      }
    }
 ?>


<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header" align="center">ESTIMASI</h2>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<form role="form"  action="<?php echo base_url(); ?>estimasi/tampilkan" method="POST">
							<div class="form-group">
								<label>Tahun Kepengurusan</label>

								<select class="form-control" name="id_kegiatan" >
									<?php 
									foreach ($kegiatan as $nama) {

										?>
										<option value="<?php echo $nama->id ?>" ><?php echo $nama->tahun_kep; ?></option>

										<?php 

									}
									?>

								</select>
							</div>

						</div>
						<div class="col-md-4">

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

								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								
								<br>
								<button type="submit" class="btn btn-primary">Tampilkan</button>
							</div>  
						</div>
					</form>
				</div>
			</div>
		</div> 
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
					<th style="background: dodgerblue; text-align: center;">NO</th>
					<th style="background: dodgerblue; text-align: center;">JENIS</th>
					<th style="background: dodgerblue; text-align: center;">NAMA SIE</th>
					<th style="background: dodgerblue; text-align: center;">NAMA TRANSAKSI</th>
					<th style="background: dodgerblue; text-align: center;"><b>BANYAK</b></th>
					<th style="background: dodgerblue; text-align: center;"><b>HARGA SATUAN</b></th>
					<th style="background: dodgerblue; text-align: center;"><b>JUMLAH</b></th>
					<th style="background: dodgerblue; text-align: center;"><b>AKSI</b></th>


			<?php
			$no=0;
			$jumlah=0;
			foreach ($sql as $val) {
				$jumlah=$val->banyak*$val->harga_satuan;
				$no++;
				?>
				<tbody>
					<tr>
						<td><?php echo $no ?> </td>
						<td><?php echo $val->jenis ?> </td>
						<td><?php echo $val->nama_sie  ?></td>
						<td><?php echo $val->nama_estimasi  ?></td>
						<td><?php echo $val->banyak  ?></td>
						<td>Rp <?php echo number_format($val->harga_satuan,2,',','.')?></td>
						<td>Rp <?php echo number_format($jumlah,2,',','.')?></td>
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
				<form role="form"  action="<?php echo base_url(); ?>estimasi/simpan" method="POST">

					 <div class="form-group">
		          	 <input type="hidden" name="op" value="<?php echo $op ?>" class="form-control">
                     <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
					<div class="form-group">
						<label>NAMA KEGIATAN</label>
					</div>
					<div class="form-group">
						<label>Jenis</label>
						<select class="form-control" name="jenis">
							<option>PEMASUKAN</option>
							<option>PENGELUARAN</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Sie</label>
						<select class="form-control" name="nama_sie">
							<option>SUMBER DANA</option>
							<option>KONSUMSI</option>
							<option>PDD</option>
							<option>PERLENGKAPAN</option>
							<option>ACARA</option>
							<option>HUMAS</option>
							<option>KESEKRETARIATAN</option>
							<option>P3K</option>
						</select>
					</div>					
					<div class="form-group">
						<label for="nama_estimasi-name" class="form-control-label">Nama Transaksi</label>
						<input type="text" name="nama_estimasi" value="<?php echo $nama_estimasi ?>" class="form-control" id="recipient-name" required>
					</div>

					<div class="form-group">
						<label for="banyak-name" class="form-control-label">Banyak</label>
						<input type="text" name="banyak" value="<?php echo $banyak?>" class="form-control" id="recipient-name" required>
					</div>
					<div class="form-group">
						<label for="r-name" class="form-control-label">Harga Satuan</label>
						<input type="text" name="harga_satuan" value="<?php echo $harga_satuan ?>"  class="form-control" id="recipient-name" required>
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

<script type="text/javascript">
	$(document).ready({
		$('#exampleModal').modal('toggle')
		console.log('hai')
	});
</script>









