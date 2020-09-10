<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                2020 &copy; Koni Pekanbaru. All Rights Reserved. Development by <i class='uil uil-heart text-danger font-size-12'></i> <a href="https://lkdn.com" target="_blank">PT. Lancang Kuning Digital Niaga</a>
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
<script src="<?= base_url('assets/'); ?>assets/js/vendor.min.js"></script>

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

<!-- Datatables init -->
<script src="<?= base_url('assets/'); ?>assets/js/pages/datatables.init.js"></script>
</body>

</html>