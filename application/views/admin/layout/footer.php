<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                2021 &copy; . All Rights Reserved. By. Data dan Informasi</i> <a href="http://kampusmerdeka.ung.ac.id" target="_blank"></a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->

<!-- /Right-bar -->

<!-- Right bar overlay-->


<!-- Vendor js -->


<!-- optional plugins -->
<script src="<?= base_url('assets/'); ?>assets/libs/moment/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- page js -->
<script src="<?= base_url('assets/'); ?>assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="<?= base_url('assets/'); ?>assets/js/app.min.js"></script>

<script src="<?= base_url('assets/'); ?>assets/libs/summernote/summernote-bs4.min.js"></script>

<!-- Init js -->
<script src="<?= base_url('assets/'); ?>assets/js/pages/form-editor.init.js"></script>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript">
    $(function() {
        CKEDITOR.replace('ckeditor', {
            filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php'); ?>',
            height: '400px'
        });
    });
</script>

<!-- datatable js -->
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/responsive.bootstrap4.min.js"></script>

<script src="<?= base_url('assets/'); ?>assets/libs/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/buttons.flash.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/buttons.print.min.js"></script>

<script src="<?= base_url('assets/'); ?>assets/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('assets/'); ?>assets/libs/datatables/dataTables.select.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script> -->
<!-- Datatables init -->
<script src="<?= base_url('assets/'); ?>assets/js/pages/datatables.init.js"></script>


<!-- TINY MCE -->
<script src='<?= base_url() ?>resources/tinymce/tinymce.min.js'></script>

<!-- TINY MCE -->



<script src="https://cdn.tiny.cloud/1/vditcx6yew6ckhypokzubv8a50mowxg02p66kbnt5tru3dti/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        height: "480",
        selector: 'textarea',
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
        image_title: true,
        /* enable automatic uploads of images represented by blob or data URIs*/
        automatic_uploads: true,

        file_picker_types: 'image',
        /* and here's our custom image picker*/
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');



            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function() {
                    /*
                      Note: Now we need to register the blob in TinyMCEs image blob
                      registry. In the next release this part hopefully won't be
                      necessary, as we are looking to handle it internally.
                    */
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        },

    });
</script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: true,
        timer: 5000
    });
    <?php if ($message = $this->session->flashdata('success')) { ?>
        Toast.fire({
            icon: 'success',
            title: '<?php echo $message ?>.'
        })
    <?php } ?>
    <?php if ($message = $this->session->flashdata('error')) { ?>
        Toast.fire({
            icon: 'error',
            title: '<?php echo $message ?>.'
        })
    <?php } ?>
</script>
</body>

</html>