<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
    echo "<b>".$info."</b><br /><br />";
}
?>

<div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Nama depan</th>
                                            <th>Nama belakang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $no=1; foreach ($data->result() as $row): ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->username; ?></td>
                                            <td><?php echo $row->password; ?></td>
                                            <td class="center"><?php echo $row->level; ?></td>
                                            <td class="center"><?php echo $row->nama_depan; ?></td>
                                            <td class="center"><?php echo $row->nama_belakang; ?></td>
                                            <td class="center">
                                            <a href="<?php echo base_url().'index.php/publisher/administrator/editData/'.$row->id; ?>">Edit</a>
                                            
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>