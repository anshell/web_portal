<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="ts-grid-box">
                    <div class="login-page">
                        <h3 class="log-sign-title text-center mb-25">Login Pengguna</a></h3>
                        <?= $this->session->flashdata('message') ?>
                        <form method="post" action="<?php echo base_url('auth') ?>" role="form">
                            <div class="form-group">
                                <label for="inputUsernameEmail">Username</label>
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Nama Pengguna" required>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password" required>
                            </div>
                            <button type="submit" class="btn btn btn-primary" name="submit"> Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>