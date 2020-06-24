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
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            file_browser_callback: function(field, url, type, win) {
                tinyMCE.activeEditor.windowManager.open({
                    file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' +
                        field + '&type=' + type,
                    title: 'KCFinder',
                    width: 700,
                    height: 500,
                    inline: true,
                    close_previous: false
                }, {
                    window: win,
                    input: field
                });
                return false;
            },
            selector: "#isi_konten",
            height: 150,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>

    <?php
    // Error
    if (isset($error)) {
        echo '<div class="alert alert-warning">';
        echo $error;
        echo '</div>';
    }

    // Validasi
    echo validation_errors('<div class="alert alert-success">', '</div>');

    // Form
    echo form_open_multipart('Edit/update/' . $id_gunung);
    ?>



    <div class="col-md-8">
        <div class="form-group form-group-lg">
            <label>Nama Gunung</label>
            <input type="text" name="nama_gunung" placeholder="Nama Gunung" value="<?php echo $nama_gunung ?>" required class="form-control">
        </div>
    </div>

    <div class="col-md-8">
        <div class="form-group form-group-lg">
            <label>Provinsi</label>
            <input type="text" name="provinsi" placeholder="Provinsi" value="<?php echo $provinsi ?>" required class="form-control">
        </div>
    </div>

    <div class="col-md-8">
        <div class="form-group form-group-lg">
            <label>Kabupaten/Kota</label>
            <input type="text" name="kabupaten" placeholder="Kabupaten/Kota" value="<?php echo $kabupaten_kota ?>" required class="form-control">
        </div>
    </div>

    <div class="col-md-8">
        <div class="form-group form-group-lg">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan ?>" required class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group form-group-lg">
            <label>Status Gunung</label>
            <select name="status_gunung" class="form-control">
                <option value="1">Dibuka</option>
                <option value="2">Tutup</option>
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group form-group-lg">
            <label>Kategori Gunung</label>
            <select name="kategori_gunung" class="form-control">
                <option value="1">Gunung Api</option>
                <option value="2">Bukan Gunung Api</option>
            </select>
        </div>
    </div>


    <div class="col-md-12">

        <div class="form-group">
            <label>Upload gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <div class="form-group">
            <label>Isi Konten</label>
            <textarea name="isi_konten" class="form-control" placeholder="Isi Konten" id="isi_konten"><?php echo $konten ?></textarea>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
            <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
        </div>

    </div>


    <?php echo form_close() ?>

</div>