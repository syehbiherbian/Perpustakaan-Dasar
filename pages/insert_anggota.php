<?php include "pages/koneksi.php";?>
<div class="col-md-6">
                                <div class="box box-warning">
                                <div class="box-header">
                                    <center><h3 class="box-title">Tambah Anggota</h3></center>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form action='proses_anggota.php' role="form" method="post" ENCTYPE="multipart/form-data">
                                    <div class="box-body">
                                        <div class="box-body">
                                        <div class="form-group">
                                            <label>Kode Anggota</label>
                                            <input required type="text" class="form-control" name="kode_ang" placeholder="Kode Anggota">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Anggota</label>
                                            <input required type="text" class="form-control" name='nama_ang' placeholder="Nama Anggota">
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <br><select class="col-md-4" name="tanggal" >
                                                <?php
for ($i = 1; $i <= 31; $i++) {
	echo "<option  value=" . $i . ">" . $i . "</option>";
}
?>
                                            </select>
                                             <select class="col-md-4" name="bulan" >
                                            <?php
$bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
for ($i = 1; $i <= 12; $i++) {
	echo "<option  value=" . $i . ">" . $bulan[$i] . "</option>";
}
?>
                                            </select>
                                            <select class="col-md-4" name="tahun" >
                                            <?php
for ($i = 2015; $i >= 1985; $i--) {
	echo "<option  value=" . $i . ">" . $i . "</option>";
}
?>
                                            </select>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Alamat Anggota</label>
                                            <input required type="text" class="form-control" name='alamat_ang' placeholder="Alamat Anggota">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Handphone</label>
                                            <input required type="text" class="form-control" name='no_telp' placeholder="Nomor Handphone">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            </div>