<div ng-controller="galeryController">
    <div id="container">
        <h1>Video Upload</h1>
    
        <div id="body">
            <p>Select a video file to upload (support video :mp4,avi,mkv,flv)</p>
            <?php
                    if (isset($success) && strlen($success)) {
                        echo '<div class="success">';
                        echo '<p>' . $success . '</p>';
                        echo '</div>';
                        
                        
     
                        
                    }
                    if (isset($errors) && strlen($errors)) {
                        echo '<div class="error">';
                        echo '<p>' . $errors . '</p>';
                        echo '</div>';
                    }
                    if (validation_errors()) {
                        echo validation_errors('<div class="error">', '</div>');
                    }
                    ?>
            <?php
                    $attributes = array('name' => 'video_upload_form', 'id' => 'video_upload_form');
                    echo form_open_multipart($this->uri->uri_string(), $attributes);
                    ?>
            <p><input name="video_name" id="video_name" readonly="readonly" type="file" /></p>
            <form action="<?php echo base_url().'index.php/admin/video'; ?>" enctype="multipart/form-data" method="post">
                <p><input type="text" name="judul" id="judul" size="50" placeholder="judul video"></p>
    
                <p><input name="video_upload" value="Upload Video" type="submit" /></p>
            </form>
            <?php
                    echo form_close();
                    ?>
        </div>
    
    </div>
    
    <div id="container">
        <h4>File Video</h4>
        <table width="80%" class="table table-striped table-bordered table-hover">
    
            <tr>
                <th>No</th>
                <th>Nama Video</th>
                <th>Tampilkan</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php 
                        $no = 1;
                        foreach ($data->result() as $row) { ?>
    
                <?php $id = $row->id; ?>
                <td width="5%">
                    <?php echo $no++; ?>
                </td>
                <td width="60%">
                    <?php echo $row->video_name; ?>
                </td>
                <td width="25%">
                    <form action="<?php echo base_url().'index.php/admin/video/updateVideo/'.$id; ?>" method='post'>
                        <select id="tampil" name="tampil" onchange="this.form.submit();">
                            <option value="ya" <?php if($row->tampil=='ya'){echo 'selected';} ?>>YA</option>
                            <option value="tidak" <?php if($row->tampil=='tidak'){echo 'selected';} ?>>TIDAK</option>
                        </select>
                    </form>
                </td>
                <td>
                    <a class="btn btn-danger" href="<?php echo base_url().'index.php/admin/video/delete_data/'.$row->id; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
            </form>
        </table>
    </div>
</div>