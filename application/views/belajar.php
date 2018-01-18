<div class="row">
      <div class="col-lg-12">
      </br>
      </div>
</div><!--/.row-->

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
          <div class="panel-heading">INPUT DATA PENGGUNA</div>
          <div class="panel-body">
<div class="row">
  <div class="col-md-4">
  	 <form>
         <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control">
         </div>
         <div class="form-group">
             <label>NAMA</label>
             <input type="text" name="nama" class="form-control">
         </div>
         <div class="form-group">
             <label>Jabatan</label>
                <select class="form-control">
                        <option>Admin</option>
                         <option>Ketua</option>
                         <option>Users</option>
                         </select>
         </div>
            <div class="form-group">
               <label>Email</label>
               <input type="text" name="email" class="form-control">
         </div>
            <div class="form-group">
                              <label>Password</label>
                        <input type="password" name="password" class="form-control">
                  </div>
                      <form method="post" enctype="multipart/form-data" action="upload.php">
                      <input type="file" name="gambar">
                </form>
                <br>
                   <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                   </div>
                </form> 
  </div>
  <div class="col-md-8">
  	<table class="table table-bordered table-striped">
                    <thead>
                      <tr style="background: darkorange;">
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>JABATAN</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                         <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>14.12.8008</td>
                        <td>NAFA DINIAH</td>
                        <td>ADMIN</td>
                        <td>nafadiniah@gmail.com</td>
                        <td>ADMIN</td>
                        <td></td>
                      </tr>
                       <tr>
                        <td>14.12.8000</td>
                        <td>Niah</td>
                        <td>Ketua</td>
                        <td>diniah@gmail.com</td>
                        <td>ketua</td>
                        <td></td>
                      </tr>
                        <tr>
                        <td>14.12.8009</td>
                        <td>SAIFUDIN</td>
                        <td>USERS</td>
                        <td>saifudin@gmail.com</td>
                        <td>users</td>
                        <td></td>
                      </tr>
                     </tbody>
                  </table>
  </div>
</div> 
</div> 