<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style ="margin-bottom :5px;">Tambah Data</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis kelamin</th>
                                            <th>Prodi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                            $sql = $koneksi->query("select * from tb_anggota");
                                            
                                            while ($data=$sql->fetch_assoc()) {
                                                $jk = ($data['jk']==L)?"Laki-laki":"Wanita";
                                                
                                            
                                        
                                        ?>

                                        <tr>
                                            <td><?php echo $data ['nrp'];?></td>
                                            <td><?php echo $data ['nama'];?></td>
                                            <td><?php echo $data ['tempat_lahir'];?></td>
                                            <td><?php echo $data ['tgl_lahir'];?></td>
                                            <td><?php echo $jk;?></td>
                                            <td><?php echo $data ['prodi'];?></td>
                                            <td>
                                                <a href = "?page=anggota&aksi=ubah&id=<?php echo $data['nrp']; ?>" class ="btn btn-info">Ubah</a>
                                                <a onclick = "return confirm ('Anda yakin akan menghapus data ?')" href = "?page=anggota&aksi=hapus&id=<?php echo $data['nrp']; ?>" class ="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>