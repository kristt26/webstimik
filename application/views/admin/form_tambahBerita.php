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
						<form method="POST" action="<?php echo base_url() . 'admin/berita/simpanData'; ?>" enctype="multipart/form-data" onsubmit="return cekform();">
								<div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" placeholder="Judul Berita" name="judul" id="judul">

                                        </div>
                                        <div class="form-group">
                                            <label>Isi Berita</label>
                                            <textarea class="ckeditor" rows="10" name="isi" id="isi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" class="form-control" placeholder="tanggal" name="tanggal">
                                        </div>
                                        <div class="form-group">
                                            <label>Publish</label>
                                            <select name="publish"class="form-control">
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
