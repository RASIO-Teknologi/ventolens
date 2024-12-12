@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Header</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Header</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.header.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control p-1" name="logo">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $header != null ? $header->gambar($header->logo) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="background">Background</label>
                        <input type="file" class="form-control p-1" name="background">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $header != null ? $header->gambar($header->background) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input maxlength="56" type="text" class="form-control" name="judul" value="{{ $header != null ? $header->judul : '' }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input maxlength="126" type="text" class="form-control" name="deskripsi" value="{{ $header != null ? $header->deskripsi : '' }}" required>
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
    $.validator.addMethod('filebackground', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'Ukuran maksimal 1 MB')

    $('#form-validation').validate({
        rules: {
            judul: {
                maxlength: 49,
            },
            deskripsi: {
                maxlength: 223,
            },
            logo: {
                filesize: 500000,
            },
            background: {
                filesize: 500000,
            },
            background: {
                filebackground: 1000000,
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
