@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tentang Kami</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Tentang Kami</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.tentang-kami.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input maxlength="36" type="text" class="form-control" name="judul" value="{{ $tentangKami != null ? $tentangKami->judul : '' }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control p-1" name="gambar">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $tentangKami != null ? $tentangKami->gambar($tentangKami->gambar) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea maxlength="214" class="form-control" name="deskripsi" cols="30" rows="4" required>{{ $tentangKami != null ? $tentangKami->deskripsi : '' }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success float-right">Simpan</button>
        </div>
    </form>
</div>
@endsection

@push('js')
<script>
    $('#form-validation').validate({
        rules: {
            judul: {
                maxlength: 45,
            },
            deskripsi: {
                maxlength: 223,
            },
            gambar: {
                filesize: 500000,
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
