<?php include "pages/koneksi.php";
?>
<div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Table Kategori</h3>
                </div><!-- /.box-header -->
<center>
<table class="table table-bordered table-hover">
  <tr>
    <b><td align="center">No</td>
    <td align="center">Kode Kategori</td>
    <td align="center">Nama Kategori</td>
    <td align="center">Action</td>
  </tr>
  <?PHP
$sql = mysql_query("select * from tb_kategori");
$no = 1;
while ($data = mysql_fetch_array($sql)) {
	$kode_kategori = $data['kode_kategori'];
	$nama_kategori = $data['nama_kategori'];
	echo "
  <tr>
    <td align='center'>$no</td>
    <td align='center'>$kode_kategori</td>
    <td align='center'>$nama_kategori</td>
    <td align='center'><a class='btn btn-info' href='ubah_kategori.php?id=$kode_kategori'><i class='glyphicon glyphicon-edit'></i></i></a>
    <a class='btn btn-danger' href='hapus_kategori.php?id=$kode_kategori'><i class='glyphicon glyphicon-trash'></i></a></td>
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