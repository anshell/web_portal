<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-sm-8 col-xl-6">
                    <h4 class="mb-1 mt-0">
                        Data Pengelola Program
                    </h4>
                </div>
                <div class="col-md-9 col-xl-6 text-md-right">
                    <div class="mt-4 mt-md-0">
                        <a href="<?= site_url('admin/profil/tambah') ?>" class="btn btn-danger mr-4 mb-3 btn-sm  mb-sm-0"><i class="uil-plus mr-1"></i> Tambah Data</a>

                    </div>
                </div>
            </div>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1"></h4>
                            <p class="sub-header"></p>
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Foto</th>

                                        <th>
                                            <center>Aksi </center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($pengelola as $r) { ?>
                                        <tr>
                                            <td><?php echo $r->nama ?></td>
                                            <td><?php echo $r->jabatan ?></td>
                                            <td><img src="<?= base_url('berkas/pengurus/') . $r->foto; ?>" alt="Shreyu" class="card-img-top" width="200" height="150" /></td>
                                            <td scope="row">
                                                <center>
                                                    <a href="<?= site_url('admin/profil/edit_user/') . $r->id ?>" class="text-info d-inline-block " data-toggle="tooltip" data-placement="top" title="" data-original-title="edit data">
                                                        <i class="uil uil-edit mr-1"></i>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?= site_url('admin/profil/hapus_user/') . $r->id ?>" class="text-danger d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="hapus data">
                                                        <i class="uil uil-trash mr-1"></i>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div> <!-- container-fluid -->
    </div> <!-- content -->
</div>