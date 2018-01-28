<?php 
    $op;
    $id = "";
    $no_nota ="";
    $tanggal = "";
    $dari = "";
    $uang = "";
    $terbilang = "";
    $penerima = "";
    $no_telp = "";
    $keterangan = "";
if ($op=='edit')
 {
    foreach ($sql as $val) {
      $op = "edit";
      $id = $val->id;
      $no_nota = $val->no_nota;
      $tanggal = $val->tanggal;
      $dari = $val->dari;
      $uang = $val->uang;
      $terbilang = $val->terbilang;
      $penerima = $val->penerima;
      $no_telp = $val->no_telp;
      $keterangan = $val->keterangan;
      }
    }
 ?>


<div class="row">
      <div class="col-lg-12">
        <h2 class="page-header" align="center">NOTA BARU</h2>
      </div>
</div><!--/.row-->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
          <div class="panel-heading">INPUT DATA NOTA BARU</div>
          <div class="panel-body">
<div class="row">
  <div class="col-md-6">
  	 <form role="form"  action="<?php echo base_url(); ?>notabaru/simpan" method="POST">
                    <div class="form-group">
                              <input type="hidden" name="op" value="<?php echo $op ?>" class="form-control">
                              <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
                              <label>No.Nota</label>
                              <input type="text" name="no_nota" value="<?php echo $no_nota ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                              <label>TANGGAL</label>
                              <input type="date" name="tanggal" value="<?php echo $tanggal ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                              <label>DITERIMA DARI</label>
                              <input type="text" name="dari" value="<?php echo $dari ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                              <label>UANG SEBESAR</label>
                              <input type="text" name="uang" value="<?php echo $uang ?>" class="form-control" required> 
                    </div>
    
  </div>
  <div class="col-md-6">
  	
                    <div class="form-group">
                              <label>TERBILANG</label>
                              <input type="text" name="terbilang" value="<?php echo $uang ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                              <label>PENERIMA</label>
                              <input type="text" name="penerima" value="<?php echo $penerima ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                              <label>No. Telp</label>
                              <input type="text" name="no_telp" value="<?php echo $no_telp ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                              <label>KETERANGAN</label>
                              <input type="text" name="keterangan" value="<?php echo $keterangan ?>" class="form-control" required>
                    </div>
                     <br>
                   <div align="right" class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                   </div>
     </form>
  </div>
</div> 
</div> 
</div><!--/.row-->

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
          <div class="panel-heading">DAFTAR NOTA BARU</div>
          <div class="panel-body">
<div class="row">
  <div class="col-lg-12">
  	 <table class="table table-hover">
  	 	<thead>
  	 		<tr style="text-align: center;">
  	 			<th style="text-align: center">NO.NOTA</th>
  	 			<th style="text-align: center">TANGGAL</th>
  	 			<th style="text-align: center">DITERIMA DARI</th>
  	 			<th style="text-align: center">UANG SEBESAR</th>
  	 			<th style="text-align: center">TERBILANG</th>
  	 			<th style="text-align: center">PENERIMA</th>
  	 			<th style="text-align: center">No. Telp</th>
  	 			<th style="text-align: center">KETERANGAN</th>
  	 			<th style="text-align: center">AKSI</th>
  	 		</tr>
  	 	
        </thead>  
        <?php
            $no=0;
            foreach ($sql as $notabaru) {
              $no++;
              ?>
          <tbody>
  	 		<tr>
           <?php 
           $newDate = date("d-m-Y", strtotime($notabaru->tanggal))
            ?>
  	 			<td><?php echo $notabaru->no_nota  ?></td>
  	 			<td><?php echo  $newDate  ?></td>
  	 			<td><?php echo $notabaru->dari ?></td>
  	 			<td><?php echo $notabaru->uang  ?></td>
  	 			<td><?php echo $notabaru->terbilang  ?></td>
  	 			<td><?php echo $notabaru->penerima  ?></td>
  	 			<td><?php echo $notabaru->no_telp  ?></td>
  	 			<td><?php echo $notabaru->keterangan  ?></td>
  	 			<td><a href="<?php echo base_url();?>notabaru/edit/<?php echo $notabaru->id ?>" class="btn btn-sm btn-warning ">Edit</a>
              <a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>notabaru/hapus/<?php echo $notabaru->id ?>';}" class="btn btn-sm btn-danger">Hapus</button></td>
  	 		</tr>
  	 		</tbody>
         <?php

            }
         ?>
  	 </table>
  	</div>
  </div>
