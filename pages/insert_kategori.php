<?php include "pages/koneksi.php";

?>
<div class="col-md-6">
                                <div class="box box-primary">
                                <div class="box-header">
                                    <center><h3 class="box-title">Tambah Kategori</h3></center>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form action='proses_kategori.php' role="form" method="post" ENCTYPE="multipart/form-data">
                                    <div class="box-body">
                                        <div class="box-body">
                                        <div class="form-group">
                                            <label>Kode Kategori</label>
                                            <input required type="text" class="form-control" name="kode_kat" placeholder="Masukkan Kode Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input required type="text" class="form-control" name='nama_kat' placeholder="Masukkan Nama Kategori">
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            </div>