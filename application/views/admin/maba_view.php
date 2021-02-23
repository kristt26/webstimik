<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo "<b>".$info."</b><br /><br />";
}
?>

<div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="<?php echo base_url().'index.php/admin/maba/tambahData'; ?>" class="btn btn-lg btn-success btn-block">Tambah Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Program Studi</th>
                                            <th>Alamat</th>
                                            <th>Asal Sekolah</th>
                                            <th>Registered</th>
                                            <th>Gelombang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->prodi; ?></td>
                                            <td><?php echo $row->alamat; ?></td>
                                            <td><?php echo $row->asal_sekolah; ?></td>
                                            <td><?php echo $row->register; ?></td>
                                            <td><?php echo $row->gelombang; ?></td>
                                            <td class="center">
                                            <a href="<?php echo base_url().'index.php/admin/maba/editData/'.$row->id; ?>">Edit</a>&nbsp;|&nbsp;
                                            <a href="<?php echo base_url().'index.php/admin/maba/delete/'.$row->id; ?>" onclick="javascript: return confirm('Anda yakin hapus')">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>