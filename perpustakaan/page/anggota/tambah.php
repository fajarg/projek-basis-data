<div class ="panel panel-default">
<div class ="panel-heading">
    Tambah Data
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                   <form method="POST">
                                    <form role="form">

                                        <div class="form-group">
                                            <label>NRP</label>
                                            <input class="form-control" name="nrp" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type = "date" name="tgl_lahir" />
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br/>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value = "l" name="jk"/> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value = "p" name="jk"/> Perempuan
                                            </label>
                                        </div>

                                         <div class="form-group">
                                            <label>Prodi</label>
                                            <input class="form-control" name="prodi" />
                                        </div>

                                        <div>

                                            <input type="submit" name="simpan" value = "simpan" class="btn btn-primary"

                                        </div>

                              </div>     
                            </form>
                    </div>
</div>
</div>
</div>

<?php
    $nrp=$_POST ['nrp'];
    $nama=$_POST ['nama'];
    $tempat_lahir=$_POST ['tempat_lahir'];
    $tgl_lahir=$_POST ['tgl_lahir'];
    $jk=$_POST ['jk'];
    $prodi=$_POST ['prodi'];

    $simpan=$_POST ['simpan'];

    if ($simpan) {
        $sql = $koneksi->query("insert into tb_anggota (nrp, nama, tempat_lahir, tgl_lahir, jk, prodi) values ('$nrp', ' $nama', '$tempat_lahir', '$tgl_lahir', ' $jk', '$prodi')");
        
        if ($sql) {
            ?>
                <script type ="text/javascript">
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=anggota";
                </script>
            <?php
        }
    }


?>