<?php include "pages/koneksi.php";?>
<div class="col-md-6">
                                <div class="box box-success">
                                <div class="box-header">
                                    <center><h3 class="box-title">Tambah Penerbit</h3></center>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form action='proses_penerbit.php' role="form" method="post" ENCTYPE="multipart/form-data">
                                    <div class="box-body">
                                        <div class="box-body">
                                        <div class="form-group">
                                            <label>Kode Penerbit</label>
                                            <input required type="text" class="form-control" name="kode_pen" placeholder="Masukkan Kode Penerbit">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Penerbit</label>
                                            <input required type="text" class="form-control" name='nama_pen' placeholder="Masukkan Nama Penerbit">
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
                            </div>