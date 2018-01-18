<?php 
    $op;
    $id = "";
    $nim ="";
    $nama = "";
    $jabatan = "";
    $email = "";
    $password = "";
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
<script>
// Custom JavaScript for Validation
(function() {
  "use strict";
  window.addEventListener("load", function() {
    var form = document.getElementById("form-validation");
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() == false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  }, false);
}());
</script>

</script>
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header"></h1>
  </div>
</div><!--/.row-->

<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">Input Data Pengguna</div>
      <div class="panel-body">
        <form role="form" id="form-validation" action="<?php echo base_url(); ?>User/simpan" method="POST" >
          <div class="form-group">
            <input type="hidden" name="op" value="<?php echo $op ?>" class="form-control">
            <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
            <label>NIM</label>
            <input type="text" name="nim" id ="nim" value="<?php echo $nim ?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <select class="form-control" name="jabatan">
              <option>Admin</option>
              <option>Ketua</option>
              <option>Users</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email ?>" class="form-control"   required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password ?>"  class="form-control" required >
          </div>
          <div class="form-group">
            <label>NO Telp</label>
            <input type="text" name="notelp"  value="<?php echo $no_telp ?>" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form> 
        <div class="clear"></div>
      </div><!--End .article-->
    </div>
  </div><!--End .articles-->
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">Daftar Pengguna</div>
        <div class="panel-body">

          <table class="table table-hover">
            <thead>
              <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JABATAN</th>
                <th>EMAIL</th>
                <th>NO. TEL</th>
                <!-- <th>PASSWORD</th> -->
                <th>AKSI</th>

              </tr>
            </thead>
            <?php
            $no=0;
            foreach ($sql as $user) {
              $no++;
              ?>
              <tbody>
                <tr>
                  <td><?php echo $user->NIM  ?> </td>
                  <td><?php echo $user->nama ?> </td>
                  <td><?php echo $user->jabatan ?> </td>
                  <td><?php echo $user->email ?> </td>
                  <td><?php echo $user->no_telp ?> </td>
                  <!-- <td><?php echo $user->password ?> </td> -->
                  <td>
                    <a href="<?php echo base_url();?>User/edit/<?php echo $user->id ?>" class="btn btn-info btn-xs ">edit</a>
                    <a href="javascript:if(confirm('Apakah anda ingin menghapus?')){document.location='<?php echo base_url();?>User/hapus/<?php echo $user->id ?>';}" class="btn btn-danger btn-xs">hapus</button> </td>
                </tr>
              </tbody>
              <?php

            }
            ?>
          </table>
        </div>