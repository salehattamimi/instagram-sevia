<form method="post" action="{{ route('post.store') }}" class="form-horizontal" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group">
            {{ csrf_field() }}
        </div>


        <div class="form-group">
            <label for="file" class="control-label col-sm-3">File</label>
            <div class="col-sm-9">
                <input type="file" placeholder="Masukkan file" accept="image/png, image/jpg, image/jpeg"
                    class="form-control" name="file" id="file">
            </div>
        </div>

        <div class="form-group">
            <label for="file" class="control-label col-sm-3">Caption</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="caption" name="caption"></textarea>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
        <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Tambah</button>
    </div>
</form>

<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/form_multiselect.js') }}"></script>
<script type="text/javascript">
    if ($('.select22').length) {
        $('.select22').select2();
    }
    $(document).ready(function() {
        $("select[name='role_id']").change(function() {
            var jenis = $(this).val();
            if (jenis == 4 || jenis == 5) {
                $(".kode_rusun").show(500);
            } else {
                $(".kode_rusun").hide(500);
            }
        });
    });
</script>
