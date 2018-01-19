<div class="row">
      <div class="col-lg-12">
      </br>
      </div>
</div><!--/.row-->

<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
          <div class="panel-heading">INPUT DATA NOTA</div>
          <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label>No. Nota</label>
                        <input type="text" name="no" class="form-control">
                    </div>
                    <div class="form-group">
                          <label>NAMA KEGIATAN</label>
                             <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                </select>
                    </div>
                  </br>
                   <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="fileToUpload" id="fileToUpload">  
                    </form>
                    </br>
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
        <div class="panel-heading">Daftar Nota</div>
            <div class="panel-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr style="background: darkorange;">
                        <th style="text-align: center;">No. Nota</th>
                        <th style="text-align: center;">NAMA KEGIATAN</th>
                        <th style="text-align: center;">FILE</th>
                        <th style="text-align: center;">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>SHARING SESSION DIVISI</td>
                        <td>GAMBAR 1</td>
                        <td></td>
                      </tr>
                       <tr>
                       <td>2</td>
                        <td>SHARING SESSION DIVISI</td>
                        <td>GAMBAR 2</td>
                        <td></td>
                      </tr>
                        <td>3</td>
                        <td>SHARING SESSION DIVISI</td>
                        <td>GAMBAR 1</td>
                        <td></td>
                      </tr>
                     </tbody>
                  </table>
            </div>
      </div>
  </div>
</div>