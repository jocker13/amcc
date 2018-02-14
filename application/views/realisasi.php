

<div class="row">
	<div class="col-lg-12">
		<!-- 		<h2 class="page-header" align="center">REALISASI</h2> -->
		<br>
	</div>
</div><!--/.row-->


<div class="row">
	<div class="col-md-5">
		<div class="panel panel-default">
			<div class="panel-heading">Pilih Estimasi</div>
			<div class="panel-body">
				<form role="form">
					<div class="form-group">
						<label>NAMA KEGIATAN</label>

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
					<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Pilih</a>
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

	<div class="row">
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
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

 

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<form class="navbar-form navbar-right" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="nama transaksi" name="srch-term" id="srch-term">
					<div class="input-group-btn">
						<button class="btn btn-warning type=" submit="" "=""><i class="glyphicon glyphicon-search "></i>
						</button>
					</div>
				</div>
			</form>
			
			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th style="background: dodgerblue; text-align: center;">NO</th>
					<th style="background: dodgerblue; text-align: center;">JENIS</th>
					<th style="background: dodgerblue; text-align: center;">NAMA SIE</th>
					<th style="background: dodgerblue; text-align: center;">NAMA TRANSAKSI</th>
					<th style="background: dodgerblue; text-align: center;"><b>BANYAK</b></th>
					<th style="background: dodgerblue; text-align: center;"><b>HARGA SATUAN</b></th>
					<th style="background: dodgerblue; text-align: center;"><b>JUMLAH</b></th>
					<th style="background: dodgerblue; text-align: center;"><b>NO. NOTA</b></th>
					<th style="background: dodgerblue; text-align: center;"><b>AKSI</b></th>


					<?php
					$no=0;
					$jml=0;
					foreach ($sql as $val) {
						$jml=$val->banyak*$val->harga_satuan;
						$no++;
						?>
						<tbody>
							<tr>
								<td><?php echo $no ?> </td>
								<td><?php echo $val->jenis ?> </td>
								<td><?php echo $val->nama_sie  ?></td>
								<td><?php echo $val->nama_realisasi  ?></td>
								<td><?php echo $val->banyak  ?></td>
								<td><?php echo $val->harga_satuan  ?></td>
								<td><?php echo $jml  ?></td>
								<td><?php echo $no_nota  ?></td>
								<td align ="center">
									<a href="<?php echo base_url();?>realisasi/edit/<?php echo $val->id_realisasi ?>" class="btn btn-sm btn-warning ">Edit</a>
									<a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>realisasi/hapus/<?php echo $val->id_realisasi ?>';}" class="btn btn-sm btn-danger">Hapus</button>
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
	</div> 

<!-- 	<script type="text/javascript">
		var realisasi=document.getElementById('tampil');
		var realisasi_div=document.getElementById('realisasi_form');
		function show() {
			realisasi_div.style['display']='block';
		}


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
-->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

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
						<input type="text" name="nama_realisasi" value="<?php echo $nama_realisasi ?>" class="form-control" id="recipient-name" required>
					</div>

					<div class="form-group">
						<label for="banyak-name" class="form-control-label">Banyak</label>
						<input type="text" name="banyak" value="<?php echo $banyak?>" class="form-control" id="recipient-name" required>
					</div>
					<div class="form-group">
						<label for="r-name" class="form-control-label">Harga Satuan</label>
						<input type="text" name="harga_satuan" value="<?php echo $harga_satuan ?>"  class="form-control" id="recipient-name" required>
					</div>
					<div class="form-group">
						<label for="r-name" class="form-control-label">NO. NOTA</label>
						<input type="text" name="no_nota" value="<?php echo $no_nota ?>" class="form-control" id="recipient-name" required>
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
