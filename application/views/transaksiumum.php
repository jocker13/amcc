<?php 
$op;
$id = "";
$nama_transaksi ="";
$tanggal = "";
$jenis = "";
$Jumlah = "";
$SALDO = "";
if ($op=='edit')
{
  foreach ($sql as $val) {
    $op = "edit";                                                                                                           
    $id = $val->id;
    $nama_transaksi = $val->nama_transaksi;
    $tanggal = $val->tanggal;
    $jenis = $val->jenis;
    $Jumlah = $val->jumlah;
    $SALDO = $val->saldo;
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
      <form class="navbar-form navbar-right" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="nama transaksi" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-warning type=" submit="" "=""><i class="glyphicon glyphicon-search "></i>
            </button>
          </div>
        </div>
      </form>
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
           <!-- <th style="background: dodgerblue; text-align: center;">AKSI</th> -->
         </tr>
       </thead>
       <?php
       $no=0;
       foreach ($sql as $tran) {
        $no++;
        ?>
        <tbody>
          <tr>
            <?php 
            $newDate = date("d-m-Y", strtotime($tran->tanggal))
            ?>
            <td><?php echo $tran->nama_transaksi  ?></td>
            <td><?php echo $newDate  ?></td>
            <td><?php echo $tran->jenis  ?></td>
            <td>Rp <?php echo number_format( $tran->jumlah,2.,',',',')  ?></td>
            <td>Rp <?php echo number_format($tran->saldo,2,',',',')  ?></td>
            <!-- <td> -->
             <!--  <a href="<?php echo base_url();?>TransaksiUmum/edit/<?php echo $tran->id ?>" class="btn btn-sm btn-warning ">Edit</a> -->
             <!--  <a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>TransaksiUmum/hapus/<?php echo $tran->id ?>';}" class="btn btn-sm btn-danger">Hapus</button></a>  -->
             <!-- </td> -->
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
        <form role="form"  action="<?php echo base_url(); ?>TransaksiUmum/simpan" method="POST">

          <div class="form-group">
            <input type="hidden" name="op" value="<?php echo $op ?>" class="form-control">
            <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">

            <label for="namatransaksi-name" class="form-control-label">Nama Transaksi</label>
            <input type="text" name="nama_transaksi" value="<?php echo $nama_transaksi ?>" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
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
          <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $Jumlah ?>" required>
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

