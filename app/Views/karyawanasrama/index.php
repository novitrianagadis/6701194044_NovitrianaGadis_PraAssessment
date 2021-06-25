<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Berhasil <?php session()->getFlashdata('message'); ?></strong>
        </div>
        <script>
            $(".alert").alert();
        </script>
    <?php endif; ?>



    <div class="card">
        <div class="card-body">
            <button class="btn " data-toggle="modal" data-target="#modalTambah" style="background-color: pink;">
                Tambah Data Karyawan</button>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nip karyawan</th>
                        <th>nama Karyawan</th>

                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($karyawanasrama as $row) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['nip_karyawan'] ?></td>
                            <td><?= $row['nama_karyawan'] ?></td>

                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalUbah" class="btn btn-sm btn-warning" style="background-color: pink;" id=" btn-edit" data-nip_karyawan="<?= $row['nip_karyawan']; ?>" data-nama_karyawan="<?= $row['nama_karyawan']; ?>"><i class=" fa fa-edit"></i></button>
                                <button type="button" data-toggle="modal" data-target="#modalHapus" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                            </td>

                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>

            </table>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('karyawanasrama/tambah'); ?>" method="post">
                    <div class="form-group mb-0">
                        <label for="nip_karyawan"></label>
                        <input type="text" name="nip_karyawan" id="nip_karyawan" class=" form-control" placeholder="Masukan nip karyawan">
                    </div>
                    <div class="form-group mb-0">
                        <label for="nama_karyawan"> </label>
                        <input type="text" name="judul1" id="judul1" class="form-control" placeholder="Masukan Nama">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/karyawanasrama/hapus/<?= $row['nip_karyawan']; ?>" class="btn btn-primary"> Yakin</a>
            </div>
        </div>
    </div>
</div>