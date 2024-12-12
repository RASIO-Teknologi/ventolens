<form id="form-validation" action="{{ route('back.cms.whatsapp.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" name="telepon" value="{{ $whatsapp != null ? $whatsapp->telepon : '' }}" required>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-success float-right">Simpan</button>
        </div>
    </div>
</form>

@push('js')
<script>
    $.validator.addMethod('filebackground', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'Ukuran maksimal 2 MB')

    $('#form-validation').validate({
        rules: {
            telepon: {
                maxlength: 18,
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error)
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    })
</script>
@endpush
