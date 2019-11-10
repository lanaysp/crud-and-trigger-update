<div class="container">

        <div class="col-md-12 ml-auto mt-5 mb-3">
            <a href="" class="btn btn-primary addMenuButton" data-toggle="modal" data-target="#mhsModal">Tambah Data Mahasiswa</a>
        </div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


        <div class="col-md-12 table-responsive">
            <table id="mhs" class="table table-hover table-striped table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat Lengkap</th>
                    <th>No Hape</th>
                    <th>Actoin</th>
                </thead>
                <tbody>
                <?php if (empty($mhs)) : ?>
                    <td colspan="7">
                    Data Mahasiswa Kosong.
                    </td>
                <?php endif; ?>
                <?php  $i = 1; ?>
                <?php foreach ($mhs as $m) : ?>
                    <tr>
                        <th><?= $i ;?></th>
                        <td><?= $m['nim']; ?></td>
                        <td><?= $m['nama_mhs']; ?></td>
                        <td><?= $m['jenkel_mhs']; ?></td>
                        <td><?= $m['alamat_lengkap']; ?></td>
                        <td><?= $m['no_hp']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>mahasiswas/hapus/<?= $m['id']; ?>"
                                class="badge badge-danger float-right tombol-hapus">hapus</a>

                            <a href="<?= base_url(); ?>mahasiswas/edit/<?= $m['id']; ?>" data-toggle="modal" data-target="#mhsModal" class="badge badge-success float-right showModalEdit" data-id="<?= $m['id']; ?>">edit</a>

                            <a href="<?= base_url(); ?>mahasiswas/info/<?= $m['id']; ?>" class="badge badge-info float-right infoMhsModal" data-toggle="modal" data-target="#infoMhsModal" data-id="<?= $m['id']; ?>">View</a>
                        </td>
                    </tr>
                    <?php $i++ ; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
    </div>


<!-- Modal -->
<div class="modal fade" id="mhsModal" tabindex="-1" role="dialog" aria-labelledby="mhsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mhsModalLabel">Tambah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Mahasiswas'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="form-group">
                        <label for="nim"> Nim </label>
                        <input type="text" class="form-control" id="nim" name="nim" >
                    </div>
                    <div class="form-group">
                        <label for="nama_mhs"> Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" >
                    </div>
                    <div class="form-group">
                        <label for="jenkel_mhs"> Jenis Kelamin </label>
                        <input type="text" class="form-control" id="jenkel_mhs" name="jenkel_mhs" >
                    </div>
                    <div class="form-group">
                        <label for="alamat_lengkap"> Alamat Lengkap </label>
                       <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp"> No Handpone </label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Info -->
<div class="modal fade" id="infoMhsModal" tabindex="-1" role="dialog" aria-labelledby="infoMhsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="infoMhatModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_mhs2"> Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama_mhs2" disabled >
                </div>
                <div class="form-group">
                    <label for="nim2"> Nim</label>
                    <input type="text" class="form-control" id="nim2" disabled >
                </div>
                <div class="form-group">
                    <label for="jenkel_mhs2">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenkel_mhs2" disabled >
                </div>
                <div class="form-group">
                    <label for="alamat_lengkap2">Alamat</label>
                    <input type="text" class="form-control" id="alamat_lengkap2" disabled >
                </div>
                <div class="form-group">
                    <label for="no_hp2"> No Handpone</label>
                    <input type="text" class="form-control" id="no_hp2" disabled >
                </div>
            </div>
        </div>
    </div>
</div>