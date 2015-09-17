<?php include "pages/koneksi.php";
?>
<div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <center><h3 class="box-title">Table Buku</h3></center>
                </div><!-- /.box-header -->
<center>
<table class="table table-bordered table-hover table-responsive">
  <tr>
    <b><td align="center">No</td>
    <td align="center">Kode Buku</td>
    <td align="center">Kode Kategori</td>
    <td align="center">Kode Penerbit</td>
    <td align="center">Judul Buku</td>
    <td align="center">Jumlah Halaman</td>
    <td align="center">Deskripsi</td>
    <td align="center">Pengarang</td>
    <td align="center">Tahun Terbit</td>
    <td align="center">Action</td>
  </tr>
  <?PHP
$sql = mysql_query("select * from tb_buku");
$no = 1;
while ($data = mysql_fetch_array($sql)) {
	$kode_buku = $data['kode_buku'];
	$kode_kategori = $data['kode_kategori'];
	$kode_penerbit = $data['kode_penerbit'];
	$judul_buku = $data['judul_buku'];
	$jumhal_buku = $data['jumhal_buku'];
	$desk_buku = $data['desk_buku'];
	$pengarang_buku = $data['pengarang_buku'];
	$tahun_terbit = $data['tahun_terbit'];
	echo "
  <tr>
    <td align='center'>$no</td>
    <td align='center'>$kode_buku</td>
    <td align='center'>$kode_kategori</td>
    <td align='center'>$kode_penerbit</td>
    <td align='center'>$judul_buku</td>
    <td align='center'>$jumhal_buku</td>
    <td align='center'>$desk_buku</td>
    <td align='center'>$pengarang_buku</td>
    <td align='center'>$tahun_terbit</td>
    <td align='center'><a class='btn btn-info' href='ubah_buku.php?id=$kode_buku'><i class='glyphicon glyphicon-edit'></i></i></a>
    <a class='btn btn-danger' href='hapus_buku.php?id=$kode_buku'><i class='glyphicon glyphicon-trash'></i></a></td>
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