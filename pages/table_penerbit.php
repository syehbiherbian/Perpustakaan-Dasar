<?php include "pages/koneksi.php";
?>
<div class="row">
            <div class="col-md-9">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Table Penerbit</h3>
                </div><!-- /.box-header -->
<center>
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
</center>
</div>
</div>
</div>