<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-sm-8 col-xl-6">
                    <h4 class="mb-1 mt-0">
                        Tambah Pofil dan peranan

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
                            <?php echo form_open("admin/profil/simpan"); ?>
                            <div class="row">
                                <div class="col">

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Isi Profil </label>
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                        <div class="col-lg-10">
                                            <textarea id="mytextarea" rows="5" name='profil'>

                                                 </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="example-textarea">Isi Peranan </label>

                                        <div class="col-lg-10">
                                            <textarea id="mytextarea" rows="5" name='peran'>

                                                 </textarea>
                                        </div>
                                    </div>


                                    <div class=" form-group row p-2">
                                        <a href="<?= site_url('admin/profil') ?>" class="btn btn-secondary btn-sm">Batal</a>&nbsp;&nbsp;
                                        <button type="submit" name="submit" class="btn btn-success btn-sm" value="Simpan">Simpan</button>
                                    </div>


                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>

            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->




</div>