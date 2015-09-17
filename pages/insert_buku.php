<?php include "pages/koneksi.php";?>
<div class="col-md-6">
                                <div class="box box-primary">
                                <div class="box-header">
                                    <center><h3 class="box-title">Tambah Buku</h3></center>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form action='proses_buku.php' role="form" method="post" ENCTYPE="multipart/form-data">
                                    <div class="box-body">
                                        <div class="box-body">
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input required type="text" class="form-control" name="kode_buku" placeholder="Masukkan Kode Buku">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Kategori</label>
                                            <select name="kode_kategori" class="form-control">
                                                <?PHP
//untuk menampilkan semua jurusan yang ada di database
$sql_j = mysql_query("select * from tb_kategori");
while ($data_j = mysql_fetch_array($sql_j)) {
	$kode_kategori = $data_j['kode_kategori'];
	echo "<option>$kode_kategori</option>";
}
?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Penerbit</label>
                                            <select name="kode_penerbit" class="form-control">
                                                <?PHP
//untuk menampilkan semua jurusan yang ada di database
$sql_j = mysql_query("select * from tb_penerbit");
while ($data_j = mysql_fetch_array($sql_j)) {
	$kode_penerbit = $data_j['kode_penerbit'];
	echo "<option>$kode_penerbit</option>";
}
?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input required type="text" class="form-control" name='judul_buku' placeholder="Masukkan Judul Buku">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Halaman</label>
                                            <input required type="text" class="form-control" name='jumhal_buku' placeholder="Jumlah Halaman">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea  class="form-control" name='desk_buku' placeholder="Deskripsi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input required type="text" class="form-control" name='pengarang' placeholder="Pengarang">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input required type="text" class="form-control" name='tahun_terbit' placeholder="Tahun Terbit">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            </div>