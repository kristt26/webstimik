<hr>
<center><h2>Calon Mahasiswa Lulus Seleksi</h2></center>

    <div class="container">
      <!-- Button to Open the Modal -->
        <!-- 
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
     Grafik Penerimaan Maba 
      </button>
      
      </div>
      -->
      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Grafik Calon Maba</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            <!--  <?php $this->load->view('charts/view_mabacharts'); ?> -->
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>

    <div class="container container-md">
       
        <table class="table table-striped table-bordered table-hover " id="dataTables-example">
  
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Program Studi</th>
              <!--<th scope="col">Alamat</th>-->
              <th scope="col">Asal Sekolah</th>
              <th scope="col">Daftar Ulang</th>
              <th scope="col">Gelombang</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($maba_lulus as $row): ?>
            <tr>
              <th scope="row"><?php echo $no++; ?></th>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['prodi']; ?></td>
              <!--<td><?php echo $row['alamat']; ?></td>-->
              <td><?php echo $row['asal_sekolah']; ?></td>
              <td><?php echo $row['register']; ?></td>
              <td><?php echo $row['gelombang'] ?></td>
              
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        
        <hr>
    </div>
    
   


 