<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo "<b>".$info."</b><br /><br />";
}
?>

<div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="<?php echo base_url().'index.php/admin/fasilitas/tambahData'; ?>" class="btn btn-lg btn-success btn-block">Tambah Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Fasilitas</th>
                                            <th>Deskripsi Fasilitas</th>
                                            <th>Gambar 1</th>
                                            <th>Gambar 2</th>
                                            <th>Gambar 3</th>
                                            <th>Gambar 4</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->isi; ?></td>
                                            <td class="center"><?php echo $row->gambar1; ?></td>
                                            <td class="center"><?php echo $row->gambar2; ?></td>
                                            <td class="center"><?php echo $row->gambar3; ?></td>
                                            <td class="center"><?php echo $row->gambar4; ?></td>
                                            <td class="center">
                                            <a href="<?php echo base_url().'index.php/admin/fasilitas/editData/'.$row->id; ?>">Edit</a>&nbsp;|&nbsp;
                                            <a href="<?php echo base_url().'index.php/admin/fasilitas/delete/'.$row->id; ?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>