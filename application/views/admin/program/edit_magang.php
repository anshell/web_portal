<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-sm-8 col-xl-6">
                    <h4 class="mb-1 mt-0">
                        Edit Magang

                    </h4>
                </div>
                <div class="col-sm-4 col-xl-6 text-sm-right">
                    <div class="btn-group ml-2 d-none d-sm-inline-block">

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-primary">
                            <h3>Ubah Kegiatan Magang</h3>
                        </div>
                        <div class="card-body">
                            <?php echo form_open("admin/program/magang/update"); ?>
                            <div class="row">
                                <div class="col">
                                    <?php
                                    //var_dump($magang);

                                    ?>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Isi Kegiatan </label>
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <input type="hidden" name="idmagang" value="<?= $magang->idmagang; ?>">
                                        <div class="col-lg-10">
                                            <textarea rows="5" name='rencana'>
                                                <?= $magang->rencana; ?>
                                                 </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Fakultas</label>

                                        <div class="col-lg-8">
                                            <select data-plugin="customselect" name="kfak" class="form-control" id="kfak" data-placeholder="Select an option">

                                                <option value="<?php echo $magang->kfak ?>" selected><?php echo $magang->n_fak ?></option>
                                                <?php

                                                foreach ($fakultas as $fk) {
                                                ?>

                                                    <option value="<?php echo $fk->kfak ?>"><?php echo $fk->n_fak ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Jurusan</label>

                                        <div class="col-lg-8">
                                            <select name="kjur" id="kjur" class="form-control">
                                                <option value="<?= $magang->kjur; ?>"><?php echo $magang->n_jur; ?></option>
                                                <option>-Jurusan-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Program Studi</label>

                                        <div class="col-lg-8">
                                            <select name="kpst" id="kpst" class="form-control">
                                                <option value="<?= $magang->kpst; ?>"><?php echo $magang->n_prodi; ?></option>
                                                <option>-Prodi-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Publish Ke Publik</label>

                                        <div class="col-lg-8">
                                            <select name="publish" id="publish" class="form-control" required>
                                                <option value="<?= $magang->publish; ?>"><?php if ($magang->publish == 1) {
                                                                                                echo "Ya";
                                                                                            } else {
                                                                                                echo "Tidak";
                                                                                            } ?></option>
                                                <option>-Publish-</option>
                                                <option value="0">Tidak</option>
                                                <option value="1">Iya</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div> <!-- end card-body -->
                        <div class="card-footer">
                            <div class=" form-group row p-2">
                                <a href="<?= site_url('admin/program') ?>" class="btn btn-secondary">Batal</a>&nbsp;&nbsp;
                                <button type="submit" name="submit" class="btn btn-success" value="Simpan">Simpan</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>

            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        //menangkap error dan men-set parameter global (timeout, dll)
        $.ajaxSetup({
            timeout: 10000,
            cache: false,
            error: function(x, e) {
                if (x.status == 0) {
                    alert('Service sedang offline!\nSilahkan hubungi Superuser!!');
                } else if (x.status == 404) {
                    alert('Permintaan URL tidak ditemukan!');
                } else if (x.status == 500) {
                    alert('Internal Server Error!');
                } else if (e == 'parsererror') {
                    alert('Error.\nParsing JSON Request failed!');
                } else if (e == 'timeout') {
                    alert('Request Time out!');
                } else {
                    alert('Error tidak diketahui: \n' + x.responseText);
                }
            }
        });
        // $('.pilih').select2();
        var csrfName = '<?= $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?= $this->security->get_csrf_hash(); ?>';
        $('#kfak').change(function() {
            var kfak = $(this).val();
            $.ajax({
                url: '<?= site_url(); ?>admin/program/cari_jurusan',
                method: "POST",
                data: {
                    kfak: kfak,
                    [csrfName]: csrfHash
                },
                async: false,
                dataType: 'json',
                success: function(datax) {
                    // console.log(datax);
                    $.each(datax, function(key, value) {
                        $('<option>').val(value.kjur).text(value.n_jur).appendTo('#kjur');

                    });

                }
            });

        });

        $('#kjur').change(function() {
            var kjur = $(this).val();
            $.ajax({
                url: '<?= site_url(); ?>admin/program/cari_prodi',
                method: "POST",
                data: {
                    kjur: kjur,
                    [csrfName]: csrfHash
                },
                async: false,
                dataType: 'json',
                success: function(dataj) {
                    console.log(dataj);
                    $.each(dataj, function(key, value) {

                        $('<option>').val(value.kpst).text(value.n_prodi).appendTo('#kpst');

                    });
                }
            });
        });


    });
</script>