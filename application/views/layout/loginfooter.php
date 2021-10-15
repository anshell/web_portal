</div>


<!-- javaScript Files
	=============================================================================-->

<!-- initialize jQuery Library -->
<script src="<?= base_url('assets/public/'); ?>js/jquery.min.js"></script>
<!-- navigation JS -->
<script src="<?= base_url('assets/public/'); ?>js/navigation.js"></script>
<!-- Popper JS -->
<script src="<?= base_url('assets/public/'); ?>js/popper.min.js"></script>

<!-- magnific popup JS -->
<script src="<?= base_url('assets/public/'); ?>js/jquery.magnific-popup.min.js"></script>

<!-- Bootstrap jQuery -->
<script src="<?= base_url('assets/public/'); ?>js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="<?= base_url('assets/public/'); ?>js/owl-carousel.2.3.0.min.js"></script>
<!-- slick -->
<script src="<?= base_url('assets/public/'); ?>js/slick.min.js"></script>

<!-- smooth scroling -->
<script src="<?= base_url('assets/public/'); ?>js/smoothscroll.js"></script>

<script src="<?= base_url('assets/public/'); ?>js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.7/sweetalert2.min.js"></script>
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