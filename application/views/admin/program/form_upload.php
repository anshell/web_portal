<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">


                <form id="upload-form" class="upload-form" method="post">
                    <div class="row align-items-center">
                        <div class="form-group col-md-9">
                            <label for="inputEmail4">Pilih File SOP:</label>
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <input type="hidden" id="kfak" name="kfak" value="<?php echo $upload->kfak; ?>">
                            <input type="hidden" id="kpst" name="kpst" value="<?php echo $upload->kpst; ?>">
                            <input type="file" class="form-control" id="upl-file" name="upl_file" required>
                            <span id="chk-error"></span>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mt-3 float-left" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                        </div>
                    </div>
                </form>
                <div class="row align-items-center">
                    <div class="col">
                        <div class="progress">
                            <div id="file-progress-bar" class="progress-bar bg-primary progress-bar-striped"></div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <div id="uploaded_file"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).on('submit', '#upload-form', function(e) {
        jQuery("#chk-error").html('');
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(element) {
                    if (element.lengthComputable) {
                        var percentComplete = ((element.loaded / element.total) * 100);
                        $("#file-progress-bar").width(percentComplete + '%');
                        $("#file-progress-bar").html(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: '<?php echo base_url() ?>admin/program/upload_sop',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',

            beforeSend: function() {
                $("#file-progress-bar").width('0%');
            },

            success: function(json) {
                if (json == 'success') {
                    $('#upload-form')[0].reset();
                    Swal.fire({
                            type: 'success',
                            title: 'File SOP',
                            text: 'File berhasil simpan!'
                        })
                        .then(function() {
                            window.location.href = "<?php echo base_url() ?>admin/program";
                        });

                } else if (json == 'failed') {
                    $('#uploaded_file').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    // Check File type validation
    $("#upl-file").change(function() {
        var allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'application/pdf', 'application/msword', 'application/vnd.ms-office', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        var file = this.files[0];
        var fileType = file.type;
        if (!allowedTypes.includes(fileType)) {
            jQuery("#chk-error").html('<small class="text-danger">Type file yang di ijinkan (JPEG/JPG/PNG/GIF/PDF/DOC/DOCX)</small>');
            $("#upl-file").val('');
            return false;
        } else {
            jQuery("#chk-error").html('');
        }
    });
</script>