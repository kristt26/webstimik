<?php
$info = $this->session->flashdata('info');
if (!empty($info)) {
    echo "<b>" . $info . "</b><br /><br />";
}
?>

<div class="panel panel-default" ng-controller="beritaController">
                        <div class="panel-heading">
                             <a href="<?php echo base_url() . 'index.php/admin/berita/tambahData'; ?>" class="btn btn-lg btn-success btn-block">Tambah Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Isi Berita</th>
                                            <th>Gambar</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no = 1;foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->judul; ?></td>
                                            <td><?php echo $row->isi; ?></td>
                                            <td class="center"><img src="<?=base_url() . 'assets/images/Berita/' . $row->gambar;?>" alt=""></td>
                                            <td class="center"><?php echo $row->tanggal; ?></td>
                                            <td class="center">
                                            <a href="<?php echo base_url() . 'index.php/admin/berita/editData/' . $row->id; ?>">Edit</a>&nbsp;|&nbsp;
                                            <a href="<?php echo base_url() . 'index.php/admin/berita/delete/' . $row->id; ?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>