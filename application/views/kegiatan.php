<?php 
$op;
$id_kegiatan = "";
$tahun_kep ="";
$nama_kegiatan = "";
$tanggal = "";

if ($op=='edit')
{
  foreach ($sql as $val) {
    $op = "edit";
    $id_kegiatan = $val->id_kegiatan;
    $tahun_kep = $val->tahun_kep;
    $nama_kegiatan = $val->nama_kegiatan;
    $tanggal = $val->tanggal;
  }
}
?>

<div class="row">
  <div class="col-lg-12">
  </br>
</div>
</div><!--/.row-->

<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">Input Data Kegiatan</div>
      <div class="panel-body">
        <form role="form"  action="<?php echo base_url(); ?>Kegiatan/simpan" method="POST">
          
          <div class="form-group">
            <input type="hidden" name="op" value="<?php echo $op ?>" class="form-control">
            <input type="hidden" name="id_kegiatan" value="<?php echo $id_kegiatan ?>" class="form-control">
            <label>TAHUN KEPENGURUSAN</label>
            <input type="text" name="tahun_kep" value="<?php echo $tahun_kep ?>" class="form-control" placeholder="2016/2017">
          </div>
          <div class="form-group">
            <label>NAMA KEGIATAN</label>
            <input type="text" name="nama_kegiatan" value="<?php echo $nama_kegiatan ?>" class="form-control">
          </div> 
          <div class="form-group">
            <label>TANGGAL</label>
            <input type="date" name="tanggal" value="<?php echo $tanggal ?>" class="form-control">
          </div>
          <div class="form-group" align="right">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form> 

        <div class="clear"></div>
      </div><!--End .article-->
    </div>
  </div><!--End .articles-->


  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">Daftar Kegiatan</div>
        <div class="panel-body">

          <table id="kegiatan" class="table table-striped table-bordered" >
          <thead>
              <tr style="background: dodgerblue;">
                <th style="text-align: center;">TAHUN</th>
                <th style="text-align: center;">NAMA KEGIATAN</th>
                <th style="text-align: center;">TANGGAL</th>
                <th style="text-align: center;">AKSI</th>
              </tr>
            </thead>
            <?php
            $no=0;
            foreach ($sql as $kegiatan) {
              $no++;
              ?>
              <tbody>
                <tr>
                  <?php 
                  $newDate = date("d-m-Y", strtotime($kegiatan->tanggal))
                  ?>
                  <td><?php echo $kegiatan->tahun_kep  ?></td>
                  <td><?php echo $kegiatan->nama_kegiatan  ?></td>
                  <td><?php echo $newDate  ?></td>
                  <td>
                    <a href="<?php echo base_url();?>Kegiatan/edit/<?php echo $kegiatan->id_kegiatan ?>" class="btn btn-sm btn-warning "><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>Kegiatan/hapus/<?php echo $kegiatan->id_kegiatan ?>';}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i>Hapus</button></a> 
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
</div>   

