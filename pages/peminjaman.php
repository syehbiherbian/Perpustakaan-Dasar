<?php include "pages/koneksi.php";?>
<div class="col-md-12">
                                <div class="box box-success">
                                <div class="box-header">
                                    <center><h3 class="box-title">Form Peminjaman</h3></center>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form class="col-md-6" action='proses_pinjam.php' role="form" method="post" ENCTYPE="multipart/form-data">
                                    <div class="box-body">
                                        <div class="box-body">
                                        <div class="form-group">
                                            <label>Kode Peminjaman</label>
                                            <input required type="text" class="form-control" name="kode_pem" placeholder="Masukkan Kode Peminjaman">
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Anggota</label>
                                            <select name="kode_ang" class="form-control">
                                                <?PHP
//untuk menampilkan semua jurusan yang ada di database
$sql_j = mysql_query("select * from tb_anggota");
while ($data_j = mysql_fetch_array($sql_j)) {
	$kode_anggota = $data_j['kode_anggota'];
	echo "<option>$kode_anggota</option>";
}
?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Penerbit</label>
                                            <input required type="text" class="form-control" name='alamat_pen' placeholder="Masukkan Alamat Penerbit">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input required type="text" class="form-control" name='no_telp' placeholder="Masukkan Nomor Telepon">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-bordered table-hover">
  <tr>
    <b><td align="center">No</td>
    <td align="center">Kode Penerbit</td>
    <td align="center">Nama Penerbit</td>
    <td align="center">Alamat</td>
    <td align="center">Nomor Telepon</td>
    <td align="center">Action</td>
  </tr>
  <?PHP
$sql = mysql_query("select * from tb_penerbit");
$no = 1;
while ($data = mysql_fetch_array($sql)) {
	$kode_penerbit = $data['kode_penerbit'];
	$nama_penerbit = $data['nama_penerbit'];
	$penerbit_alamat = $data['penerbit_alamat'];
	$telp_penerbit = $data['telp_penerbit'];
	echo "
  <tr>
    <td align='center'>$no</td>
    <td align='center'>$kode_penerbit</td>
    <td align='center'>$nama_penerbit</td>
    <td align='center'>$penerbit_alamat</td>
    <td align='center'>$telp_penerbit</td>
    <td align='center'><a class='btn btn-info' href='ubah_penerbit.php?id=$kode_penerbit'><i class='glyphicon glyphicon-edit'></i></i></a>
    <a class='btn btn-danger' href='hapus_penerbit.php?id=$kode_penerbit'><i class='glyphicon glyphicon-trash'></i></a></td>
  </tr>
  ";
	$no++;
}
?>
</table>
<div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
</div>
</b>
</tr>
</table>
                            </div>

