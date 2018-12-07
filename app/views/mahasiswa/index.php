<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash() ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Nama" name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jurusan</label>
                                    <select class="form-control" id="jurusan" name="jurusan">
                                        <option value="Sistem Infromasi">Sistem Informasi</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $m) : ?>
                    <li class="list-group-item">
                        <?= $m['nama'] ?>
                        <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $m['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?')">hapus</a>
                        <a href="<?= BASEURL ?>/mahasiswa/edit/<?= $m['id'] ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $m['id']?>">ubah</a>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $m['id'] ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
