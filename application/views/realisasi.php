<?php 
    $op;
    $id = "";
    $jenis = "";
    $nama_sie = "";
    $nama_estimasi ="";
    $banyak = "";
    $harga_satuan = "";
    $no_nota = "";


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
      $no_nota = $val->no_nota;


      }
    }
 ?>

<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header" align="center">REALISASI</h2>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<!-- <form role="form"  > -->
							<div class="form-group">
								<label>Tahun Kepengurusan</label>

								<select class="form-control" onchange="showkegiatan(this)" name="tahun_kep" >
									<?php 
									foreach ($kegiatan as $nama) {

										?>
										<option value="<?php echo $nama->tahun_kep ?>" ><?php echo $nama->tahun_kep; ?></option>

										<?php 

									}
									?>

								</select>
							</div>

						</div>
						<div class="col-md-4">

							<div class="form-group">
								<label>NAMA KEGIATAN</label>

								<select class="form-control" name="id_kegiatan" id='kegiatan' disabled="">
									
								</select>
							</div>
						</div>
						<!-- </form>
 -->						<div class="col-md-4">
							<div class="form-group">
								
								<br>
								<button   onclick="show()" class="btn btn-primary">Tampilkan</button>
							</div>  
						</div>
					
				</div>
			</div>
		</div> 
	</div> 
</div><!--/.row-->

<div class="row" id="realisasi_form" style="display:none;">
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
			<div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-striped">
					<th style="background: deepskyblue; text-align: center;">NO</th>
					<th style="background: deepskyblue; text-align: center;">JENIS</th>
					<th style="background: deepskyblue; text-align: center;">NAMA SIE</th>
					<th style="background: deepskyblue; text-align: center;">NAMA TRANSAKSI</th>
					<th style="background: deepskyblue; text-align: center;"><b>BANYAK</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>HARGA SATUAN</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>JUMLAH</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>NO. NOTA</b></th>
					<th style="background: deepskyblue; text-align: center;"><b>AKSI</b></th>


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
							<a href="<?php echo base_url();?>realisasi/edit/<?php echo $val->id ?>" class="btn btn-sm btn-warning ">Edit</a>
							<a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>realisasi/hapus/<?php echo $val->id ?>';}" class="btn btn-sm btn-danger">Hapus</button>
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

<script type="text/javascript">
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
					<div class="form-group">
						<label for="r-name" class="form-control-label">NO. NOTA</label>
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











