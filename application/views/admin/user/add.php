<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-sm-8 col-xl-6">
                    <h4 class="mb-1 mt-0">
                        Tambah Data Pegawai

                    </h4>
                </div>
                <div class="col-sm-4 col-xl-6 text-sm-right">
                    <div class="btn-group ml-2 d-none d-sm-inline-block">

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <?php echo $this->session->flashdata('pesan'); ?>


                    <div class="card">
                        <div class="card-body">




                            <div class="row">
                                <div class="col">


                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Nama</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Pengguna " id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Username</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="username" placeholder="username" id="username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Email</label>

                                        <div class="col-lg-8">
                                            <input type="email" class="form-control" name="email" placeholder="email" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Password</label>

                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" name="password" placeholder="password" id="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Role</label>

                                        <div class="col-lg-8">
                                            <select data-plugin="customselect" name="role" class="form-control" id="role" data-placeholder="Select an option">
                                                <option>Pilih</option>
                                                <?php

                                                foreach ($role as $r) {
                                                ?>

                                                    <option value="<?php echo $r->idrole ?>"><?php echo $r->role ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Fakultas</label>

                                        <div class="col-lg-8">
                                            <select data-plugin="customselect" name="kfak" class="form-control" data-placeholder="Select an option" id="kfak">
                                                <option>Pilih</option>
                                                <?php

                                                foreach ($fakultas as $fk) {
                                                ?>

                                                    <option value="<?php echo $fk->kfak ?>"><?php echo $fk->n_fak ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>


                                    <div class=" form-group row">
                                        <input type="hidden" name="aktif" id="aktif" value="1">
                                        <a href="<?= site_url('admin/user') ?>" class="btn btn-secondary btn-sm">Batal</a>&nbsp;&nbsp;
                                        <button type="submit" name="submit" class="btn btn-success btn-sm btn-register">Simpan</button>
                                    </div>


                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>

            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->




</div>
<script>
    $(document).ready(function() {

        $(".btn-register").click(function() {

            var nama = $("#nama").val();
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var role = $("#role").val();
            var aktif = $("#aktif").val();
            var kfak = $("#kfak").val();



            if (nama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama Pengguna Wadjib di Isi !'
                });

            } else if (username.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Password Wajib Diisi !'
                });

            } else if (email.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Email Wajib Diisi !'
                });

            } else if (password.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama Lengkap Wajib Diisi !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>admin/user/simpan",
                    type: "POST",
                    data: {
                        "<?php echo $this->security->get_csrf_token_name(); ?>": "<?php echo $this->security->get_csrf_hash(); ?>",
                        "nama": nama,
                        "username": username,
                        "email": email,
                        "password": password,
                        "role": role,
                        "aktif": aktif,
                        "kfak": kfak
                    },
                    success: function(response) {

                        if (response) {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Pengguna!',
                                    text: 'Data berhasil simpan!'
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>admin/user";
                                });

                        } else {

                            Swal.fire({
                                    type: 'error',
                                    title: 'Gagal!',
                                    text: 'silahkan coba lagi!'
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>admin/user";
                                });
                        }

                        console.log(response);

                    },

                    error: function(response) {
                        Swal.fire({
                                type: 'error',
                                title: 'Opps!',
                                text: 'terjadi Kesalahan!'
                            })
                            .then(function() {
                                window.location.href = "<?php echo base_url() ?>admin/user";
                            });

                    }

                })

            }

        });

    });
</script>