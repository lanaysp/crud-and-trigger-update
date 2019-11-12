<div class="container">


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

                <?php
                $i = 1;
                foreach ($isi as $k0 => $v0): ?>
                    <tr>
                        <td><?php echo $v0['id'] ?></td>
                        <td><?php echo $v0['nim'] ?></td>
                        <td><?php echo $v0['no_hp_lama'] ?></td>
                        <td><?php echo $v0['no_hp_baru'] ?></td>
                        <td><?php echo $v0['tgl_diubah'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </div>