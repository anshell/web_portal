<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-sm-8 col-xl-6">
                    <h4 class="mb-1 mt-0">
                        Data Magang
                    </h4>
                </div>
                <div class="col-md-9 col-xl-6 text-md-right">
                    <div class="mt-4 mt-md-0">
                        <a href="<?= site_url('admin/program/add_magang') ?>" class="btn btn-danger mr-4 mb-3 btn-sm  mb-sm-0"><i class="uil-plus mr-1"></i> Tambah Data</a>

                    </div>
                </div>
            </div>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="result"></div>
                            <table id="basic-datatable" class="table dt-responsive">
                                <thead>
                                    <tr>
                                        <th>Rencana</th>
                                        <th>Data</th>
                                        <th>Fakultas</th>
                                        <th>
                                            <center>Aksi </center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($magang as $r) { ?>
                                        <tr>
                                            <td><?= $r->rencana; ?></td>
                                            <td>

                                                <?php

                                                $filesop = FileSOPMagang($r->kfak);
                                                $filepob = FilePOBMagang($r->kfak);
                                                if ($filesop == TRUE) {
                                                    echo '<a data-fancybox data-type="iframe" data-src="' . base_url('berkas/filemagang/' . $filesop) . '" href="javascript:;"> <i class="uil uil-file mr-1"></i>SOP</a>';
                                                    echo '<a href="#" onclick="filesopedit(\'' . $r->kfak . '\')"><i class="uil uil-edit mr-2"></i></a>';
                                                } else {
                                                    echo '<button class="btn btn-danger mr-4 mb-3 btn-xs  mb-sm-0" onclick="uploads(\'' . $r->kfak . '\')">File SOP Belum diUpload</button>';
                                                }
                                                if ($filepob == TRUE) {
                                                    echo '<a data-fancybox data-type="iframe" data-src="' . base_url('berkas/filemagang/' . $filepob) . '" href="javascript:;"> <i class="uil uil-file mr-1"></i>POB</a>';
                                                    echo '<a href="#" onclick="filepobedit(\'' . $r->kfak . '\')"><i class="uil uil-edit mr-2"></i></a>';
                                                } else {
                                                    echo '<button class="btn btn-danger mr-4 mb-3 btn-xs  mb-sm-0" onclick="uploadpob(\'' . $r->kfak . '\')">File POB Belum diUpload</button>';
                                                }
                                                ?>

                                            </td>
                                            <td><?= $r->n_fak; ?></td>
                                            <td scope="row">
                                                <center>
                                                    <a href="<?= site_url('admin/program/magang/edit/') . encrypt_url($r->idmagang) ?>" class="text-info d-inline-block " data-toggle="tooltip" data-placement="top" title="" data-original-title="edit data">
                                                        <i class="uil uil-edit mr-1"></i>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?= site_url('admin/program/magang/delete/') . encrypt_url($r->idmagang) ?>" class="text-danger d-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="hapus data">
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script>
    function uploads(kfak) {
        var dataString = "kfak=" + kfak;
        $.ajax({
            type: "GET",
            url: "<?php base_url() ?>program/form_upload",
            data: dataString,
            beforeSend: function() {
                //  console.log(dataString);
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
                $("#result").html('<img src="<?= base_url(); ?>assets/images/loading.gif" align="absmiddle" alt="Loading..."> Loading...<br clear="all" /><br clear="all" />');
            },
            success: function(response) {
                $("#result").html(response);
            }
        });
    }

    function filesopedit(kfak) {

        var dataString = "kfak=" + kfak;
        $.ajax({
            type: "GET",
            url: "<?php base_url() ?>program/form_upload",
            data: dataString,
            beforeSend: function() {
                //console.log(dataString);
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
                $("#result").html('<img src="<?= base_url(); ?>assets/images/loading.gif" align="absmiddle" alt="Loading..."> Loading...<br clear="all" /><br clear="all" />');
            },
            success: function(response) {
                $("#result").html(response);
            }
        });
    }

    function uploadpob(kfak) {
        var dataString = "kfak=" + kfak;
        $.ajax({
            type: "GET",
            url: "<?php base_url() ?>program/form_pob",
            data: dataString,
            beforeSend: function() {
                //console.log(dataString);
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
                $("#result").html('<img src="<?= base_url(); ?>assets/images/loading.gif" align="absmiddle" alt="Loading..."> Loading...<br clear="all" /><br clear="all" />');
            },
            success: function(response) {
                $("#result").html(response);
            }
        });
    }
    $('[data-fancybox]').fancybox({
        toolbar: false,
        smallBtn: true,
        iframe: {
            preload: false

        }
    })
</script>