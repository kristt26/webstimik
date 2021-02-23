			<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
			<script type="text/javascript">
                function cekform()
                {
                    if(!$("#judul").val())
                    {
                        alert('Judul tidak boleh kosong');
                        $("#judul").focus();
                        return false;
                    }


                }
            </script>


            <?php
$info = $this->session->flashdata('info');
if (!empty($info)) {
    echo "<b>" . $info . "</b><br /><br />";
}
?>
<div ng-controller="tambahBeritaController">
						<form method="POST" action="<?php echo base_url() . 'index.php/admin/berita/updateData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">
								<div class="col-lg-6">
                                    <form role="form">
                                    	<div class="form-group">
                                            <label>id</label>
                                            <input type="text" class="form-control" placeholder="username" name="kode" id="kode" value="<?php echo $id; ?>">

                                        </div>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" placeholder="username" name="judul" id="judul" value="<?php echo $judul; ?>">

                                        </div>
                                        <div class="form-group">
                                            <label>Isi Berita</label>
                                            <textarea class="ckeditor" rows="10" name="isi" id="isi"><?php echo $isi; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" value="<?php echo $gambar; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="text" class="form-control" placeholder="tanggal" name="tanggal" id="datepicker" value="<?php echo $tanggal; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Publish</label>
                                            <select name="publish"class="form-control">
                                                <option value="<?php echo $publish; ?>"><?php echo $publish; ?></option>
                                                <option value="Y">Y</option>
                                                <option value="N">N</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="<?php echo base_url(); ?>index.php/admin/berita" class="btn btn-success">Tutup</a>
                                    </form>
                                </div>
                        </form>
</div>
