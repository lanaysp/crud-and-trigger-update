<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>


        <div class="col-md-12 table-responsive mt-5">
            <table id="log" class="table table-hover table-striped table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nim</th>
                    <th>No Hp Lama</th>
                    <th>No Hp Baru</th>
                    <th>Tanggal Di Ubah</th>
                </thead>
                <tbody>
                <?php if (empty($log)) : ?>
                    <td colspan="7" class="text-center">
                    Log Perubahan No Hp Kosong
                    </td>
                <?php endif; ?>

                <?php
                $i = 1;
                 foreach ($log as $l) : ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td><?= $l['nim']; ?></td>
                        <td><?= $l['no_hp_lama']; ?></td>
                        <td><?= $l['no_hp_baru']; ?></td>
                        <td><?= $l['tgl_diubah']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </div>