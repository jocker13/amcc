<?php 
$op;
$id_users = "";
$nim ="";
$nama = "";
$jabatan = "";
$email = "";
$password = "";
$notelp = "";
if ($op=='edit')
{
  foreach ($sql as $val) {
    $op = "edit";
    $id_users = $val->id_users;
    $nim = $val->nim;
    $nama = $val->nama;
    $jabatan = $val->jabatan;
    $email = $val->email;
    $password = $val->password;
    $notelp = $val->notelp;
  }
}
?>
<div class="row">
  <div class="col-lg-12">
    <h2 class="page-header" align="left"><img src="<?php echo base_url('assets/img/community.png') ?>" > \\ Pengguna</h2>
  </div>
</div><!--/.row-->

<!-- <div class="row">
  <div class="col-lg-12">
    <h1 class="page-header"></h1>
  </div>
</div><!--/.row--> 
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Input Data Pengguna</div>
      <div class="panel-body">
       <div class="row">
         <div class="col-md-6">

          <form role="form"  action="<?php echo base_url(); ?>User/simpan" method="POST">
            <div class="form-group">
              <input type="hidden" name="op" value="<?php echo $op ?>" class="form-control">
              <input type="hidden" name="id_users" value="<?php echo $id_users ?>" class="form-control">
              <label>NIM</label>
              <input type="text" name="nim" value="<?php echo $nim ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>NAMA</label>
              <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Jabatan</label>
              <select class="form-control" name="jabatan"  selected="<?php echo $jabatan ?>" >
                <option value="">-- pilih jabatan --</option>
                <option value="admin">Admin</option>
                <option value="ketua">Ketua</option>
                <option value="users">Users</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">     
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="<?php echo $email ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" value="<?php echo $password ?>"  class="form-control" required>
            </div>
            <div class="form-group">
              <label>Nomor Telp</label>
              <input type="text" name="notelp"  value="<?php echo $notelp ?>" class="form-control">
            </div>
            <div class="form-group" align="right">
              <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Simpan</button>
            </div>
          </form>
        </div><!--End .article-->
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Daftar Pengguna</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <table id="pengguna" class="table table-striped table-bordered" >
                <thead>
                  <tr>
                    <th style="background: dodgerblue; text-align: center;">No</th>
                    <th style="background: dodgerblue; text-align: center;">NIM</th>
                    <th style="background: dodgerblue; text-align: center;">NAMA</th>
                    <th style="background: dodgerblue; text-align: center;">JABATAN</th>
                    <th style="background: dodgerblue; text-align: center;">EMAIL</th>
                    <th style="background: dodgerblue; text-align: center;">NO. TEL</th>
                    
                    <th style="background: dodgerblue; text-align: center;">AKSI</th>

                  </tr>
                </thead>
                <?php
                $no=0;
                foreach ($sql as $user) {
                  $no++;
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no ?> </td>
                      <td><?php echo $user->nim  ?> </td>
                      <td><?php echo $user->nama ?> </td>
                      <td><?php echo $user->jabatan ?> </td>
                      <td><?php echo $user->email ?> </td>
                      <td><?php echo $user->notelp ?> </td>
                      
                      <td>
                        <a href="<?php echo base_url();?>User/edit/<?php echo $user->id_users ?>" class="btn btn-sm btn-warning "><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                        <a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>User/hapus/<?php echo $user->id_users ?>';}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</button> </td>
                        </tr>
                      </tbody>
                      <?php

                    }
                    ?>
                  </table>
                </div>
              </div>
