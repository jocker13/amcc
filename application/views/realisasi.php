

<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header" align="left"><img src="<?php echo base_url('assets/img/bar-graph-with-dollar-sign.png') ?>" > \\ Realisasi</h2>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Estimasi</div>
			<div class="panel-body">
				<form role="form">
					<div class="form-group">
						<label>Nama Kegiatan</label>

						<select class="form-control" id="id_kegiatan" name="kegiatan" >
							<option value="" >-- pilih kegiatan --</option>
							<?php 
							foreach ($kegiatan as $nama) {

								?>
								<option   value="<?php echo $nama->id_kegiatan ?>" ><?php echo $nama->nama_kegiatan; ?>   (<?php echo $nama->tahun_kep; ?>)</option>
								<?php 

							}
							?>

						</select>
					</div>
					<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Pilih Data Estimasi</a>
					</div>
					<div class="form-group">
						<label>Jenis</label>
						<input type="text" name="jenis"  class="form-control">
					</div> 
					<div class="form-group">
						<label>Nama Sie</label>
						<input type="text" name="nama_sie" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Transaksi</label>
						<input type="text" name="nama_estimasi" class="form-control">
					</div>
					<div class="form-group">
						<label>Banyak</label>
						<input type="text" name="banyak" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Satuan</label>
						<input type="text" name="harga_satuan" class="form-control">
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="text" name="jumlah" class="form-control">
					</div>

				</form> 
				<div class="clear"></div>
			</div><!--End .article-->
		</div>
	</div>

<!-- 	<div class="row"> -->
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Input Data Realisasi</div>
				<div class="panel-body">
					</<form role="form"  action="<?php echo base_url(); ?>realisasi/simpan" method="POST">
						<div class="form-group">
							<label>Jenis</label>
							<input type="text" name="jenis"  class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nama Sie</label>
							<input type="text" name="nama_sie"  class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nama Transaksi</label>
							<input type="text" name="nama_realisasi" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Banyak</label>
							<input type="text" name="banyak" class="form-control" required> 
						</div>
						<div class="form-group">
							<label>Harga Satuan</label>
							<input type="text" name="harga_satuan" class="form-control" required> 
						</div>
						<div class="form-group">
							<label>Jumlah</label>
							<input type="text" name="jumah" class="form-control" required> 
						</div>
						<div class="form-group">
							<label>No Nota</label>
							<input type="text" name="no_nota" class="form-control" required> 
						</div>
						<div class="form-group" align="right">
							<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Simpan</button>
						</div>
					</form>
					        <div class="clear"></div>
      </div><!--End .article-->
				</div>
	</div>
</div>



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<table id="realisasi" class="table table-striped table-bordered" >
					<thead>
						<tr style="background: dodgerblue; text-align: center;">
							<th style="text-align: center;">No</th>
							<th style="text-align: center;">Jenis</th>
							<th style="text-align: center;">Nama Sie</th>
							<th style="text-align: center;">Nama Transaksi</th>
							<th style="text-align: center;">Banyak</th>
							<th style="text-align: center;">Harga Satuan</th>
							<th style="text-align: center;">Jumlah</th>
							<th style="text-align: center;">No. Nota</th>
							<th style="text-align: center;">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Row 1 Data 1</td>
							<td>Row 1 Data 2</td>
							<td>Row 1 Data 2</td>
							<td>Row 1 Data 2</td>
							<td>Row 1 Data 2</td>
							<td>Row 1 Data 2</td>
							<td>Row 1 Data 2</td>
							<td>Row 1 Data 2</td>
							<td>Row 1 Data 2</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div> 

<!-- javascrip untuk data table -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#table_id').DataTable();
	});
	$(document).ready(function() {
		$('#estimasidata').DataTable();
	});
</script>
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="" >
				<h5 class="modal-title" id="exampleModalLabel">DATA ESTIMASI</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="panel-body">

				<table id="estimasidata" class="table table-striped table-bordered" >
					<thead>
						<tr style="background: dodgerblue; text-align: center;">
							
							<th style="background: dodgerblue; text-align: center;">No</th>
							<th style="background: dodgerblue; text-align: center;">JENIS</th>
							<th style="background: dodgerblue; text-align: center;">NAMA SIE</th>
							<th style="background: dodgerblue; text-align: center;">NAMA TRANSAKSI</th>
							<th style="background: dodgerblue; text-align: center;"><b>BANYAK</b></th>
							<th style="background: dodgerblue; text-align: center;"><b>HARGA SATUAN</b></th>
							<th style="background: dodgerblue; text-align: center;"><b>JUMLAH</b></th>
							<th style="background: dodgerblue; text-align: center;"><b>AKSI</b></th>
						</tr>
					</thead>
					<?php
					$no=0;
					$jumlah=0;
					foreach ($sql as $val) {
						$jumlah=$val['banyak']*$val['harga_satuan'];
						$no++;
						?>
						<tbody>
							<tr>
								<td><?php echo $no ?> </td>
								<td><?php echo $val['jenis'] ?> </td>
								<td><?php echo $val['nama_sie']  ?></td>
								<td><?php echo $val['nama_estimasi']  ?></td>
								<td><?php echo $val['banyak']  ?></td>
								<td>Rp <?php echo number_format($val['harga_satuan'],2,',','.')?></td>
								<td>Rp <?php echo number_format($jumlah,2,',','.')?></td>
								<td align ="center">
									<a 
									href="javascript:;"
									data-id="<?php echo $val['id_estimasi'] ?>"
									data-jenis="<?php echo $val['jenis'] ?>"
									data-sie="<?php echo $val['nama_sie']  ?>"
									data-estimasi="<?php echo $val['nama_estimasi']  ?>"
									data-banyak="<?php echo $val['banyak'] ?>"  
									data-harga="<?php echo $val['harga_satuan'] ?>"  
									data-op="edit"  
									data-toggle="modal" data-target="#exampleModal">
									<button id="ubah1" data-toggle="modal"  class="btn btn-sm btn-warning">Ubah</button>
								</a>
								<a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>estimasi/hapus/<?php echo $val['id_estimasi']?>';}" class="btn btn-sm btn-danger">Hapus</button>
								</td>
							</tr>
						</tbody>
						<?php
					}
					?>
				</table>
			</div>
			<script>
				function showkegiatan(selectObject){
					console.log(selectObject.value);
					var tahun =selectObject.value;
					if (tahun=='') {
						$('#kegiatan').prop('disabled',true);
					}else{
				// alert('aaaaaaaaaaaaaaaaaaa');
				$('#kegiatan').prop('disabled',false);
				$.ajax({
					url:"<?php echo base_url() ?>realisasi/getKegiatantahun",
					type:"POST",
					data:{'tahun_kep': tahun},
					dataType:'json'
					// success: function(){
					// 		alert('aaaaaaaaa');
					// },	
					// error : function(){
					// 	alert('eroor');
					// }
				});			
			}
		}
	</script>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" style="" >
					<h5 class="modal-title" id="exampleModalLabel">INPUT DATA REALISASI</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>NAMA KEGIATAN</label>
						</div>
						<div class="form-group">
							<label>JENIS</label>
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
							<label for="nama_realisasi-name" class="form-control-label">Nama Transaksi</label>
							<input type="text" name="nama_realisasi"  class="form-control" id="recipient-name" required>
						</div>

						<div class="form-group">
							<label for="banyak-name" class="form-control-label">Banyak</label>
							<input type="text" name="banyak"  class="form-control" id="recipient-name" required>
						</div>
						<div class="form-group">
							<label for="r-name" class="form-control-label">Harga Satuan</label>
							<input type="text" name="harga_satuan"  class="form-control" id="recipient-name" required>
						</div>
						<div class="form-group">
							<label for="r-name" class="form-control-label">No. Nota</label>
							<input type="text" name="no_nota"  class="form-control" id="recipient-name" required>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>