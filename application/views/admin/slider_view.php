<?php
$info = $this->session->flashdata('info');
if (!empty($info)) {
    echo "<b>" . $info . "</b><br /><br />";
}
?>

<div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="<?php echo base_url() . 'index.php/admin/slider/tambahData'; ?>" class="btn btn-lg btn-success btn-block">Tambah Data</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Gambar</th>
                                            <th>Tampil</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no = 1;foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->judul; ?></td>
                                            <td><?php echo $row->isi; ?></td>
                                            <td class="center"><img src="<?=base_url() . 'assets/images/Slider/' . $row->gambar;?>" alt=""></td>
                                            <td class="center"><?php echo $row->tampil; ?></td>
                                            <td class="center">
                                            <a href="<?php echo base_url() . 'index.php/admin/slider/editData/' . $row->id; ?>">Edit</a>&nbsp;|&nbsp;
                                            <a href="<?php echo base_url() . 'index.php/admin/slider/delete/' . $row->id; ?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>