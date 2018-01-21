<?php 
    $op;
    $id = "";
    $nama_transaksi ="";
    $Tanggal = "";
    $jenis = "";
    $Jumlah = "";
    $SALDO = "";
    $no_telp = "";
if ($op=='edit')
 {
    foreach ($sql as $val) {
      $op = "edit";
      $id = $val->id;
      $nim = $val->NIM;
      $nama = $val->nama;
      $jabatan = $val->jabatan;
      $email = $val->email;
      $password = $val->password;
      $no_telp = $val->no_telp;
      }
    }
 ?>

<div class="row">
      <div class="col-lg-12">
        <h2 class="page-header" align="center">TRANSAKSI UMUM</h2>
      </div>
</div><!--/.row-->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
          <div class="panel-heading" align="right"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a></div>
          <div class="panel-body">
 
			  <table class="table table-bordered table-striped">
			    <thead>
			      <tr>
			        <th style="background: dodgerblue; text-align: center;">NAMA TRANSAKSI</th>
			        <th style="background: dodgerblue; text-align: center;">TANGGAL</th>
			        <th style="background: dodgerblue; text-align: center;">JENIS</th>
			        <th style="background: dodgerblue; text-align: center;">JUMLAH</th>
			        <th style="background: dodgerblue; text-align: center;">SALDO</th>
			        <th style="background: dodgerblue; text-align: center;">AKSI</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>Sisa Dana 16/17</td>
			        <td>01/2/2018</td>
			        <td>Pemasukan</td>
			        <td>500000000</td>
			        <td></td>
			        <td></td>
			      </tr>
			      <tr>
			        <td>Fotocopy</td>
			        <td>11/2/2018</td>
			        <td>Pengeluaran</td>
			        <td>50000</td>
			        <td></td>
			        <td></td>
			      </tr>			    
			     </tbody>
			  </table>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA TRANSAKSI UMUM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

		          <div class="form-group">
		            <label for="namatransaksi-name" class="form-control-label">Nama Transaksi</label>
		            <input type="text" class="form-control" id="recipient-name" required>
		          </div>
		          <div class="form-group">
		              <label>Tanggal</label>
		              <input type="date" name="tgl" class="form-control" required>
		          </div>
		          <div class="form-group">
			            <label>Jenis</label>
			            <select class="form-control" name="jenis">
			              <option>Pemasukan</option>
			              <option>Pengeluaran</option>
		            	</select>
		          </div>
		          <div class="form-group">
		            <label for="r-name" class="form-control-label">Jumlah</label>
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

