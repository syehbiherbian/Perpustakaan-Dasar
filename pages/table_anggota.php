<?php include "pages/koneksi.php";
?>
<center><div class="row">
            <div class="col-md-9">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Table Anggota</h3>
                </div><!-- /.box-header -->
<center>
<table class="table table-bordered table-hover">
  <tr>
    <b><td align="center">No</td>
    <td align="center">Kode Anggota</td>
    <td align="center">Nama Anggota</td>
    <td align="center">Tanggal Lahir</td>
    <td align="center">Alamat</td>
    <td align="center">Nomor Telepon</td>
    <td align="center">Action</td>
  </tr>
  <?PHP
$sql = mysql_query("select * from tb_anggota");
$no = 1;
while ($data = mysql_fetch_array($sql)) {
	$kode_anggota = $data['kode_anggota'];
	$nama_peminjam = $data['nama_peminjam'];
	$tgl_lahir = $data['tgl_lahir'];
	$alamat_peminjam = $data['alamat_peminjam'];
	$no_telp = $data['no_telp'];
	echo "
  <tr>
    <td align='center'>$no</td>
    <td align='center'>$kode_anggota</td>
    <td align='center'>$nama_peminjam</td>
    <td align='center'>$tgl_lahir</td>
    <td align='center'>$alamat_peminjam</td>
    <td align='center'>$no_telp</td>
    <td align='center'><a class='btn btn-info' href='ubah_anggota.php?id=$kode_anggota'><i class='glyphicon glyphicon-edit'></i></i></a>
    <a class='btn btn-danger' href='hapus_anggota.php?id=$kode_anggota'><i class='glyphicon glyphicon-trash'></i></a></td>
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
</center>
</div>
</div>
</div>
</center>