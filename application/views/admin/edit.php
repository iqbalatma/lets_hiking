<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title; ?></h1>
                </div>
            </div>
            <!-- /.row -->
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Gunung</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kabupaten</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data    = $this->gunung_model->home();
                    foreach ($data as $key) {

                    ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $key->nama_gunung ?></td>
                            <td><?= $key->provinsi ?></td>
                            <td><?= $key->kabupaten_kota ?></td>
                            <td><?= $key->kecamatan ?></td>
                            <td><?= $key->kategori_gunung ?></td>
                            <td><?= $key->status_gunung ?></td>
                            <td><a href="<?= base_url(); ?>Edit/hapus/<?= $key->id_gunung; ?>">Hapus</a>
                                <a href="<?= base_url(); ?>Edit/ubah/<?= $key->id_gunung; ?>">Edit</a>
                            </td>
                        </tr>

                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->


    <!-- Main content -->

</div>