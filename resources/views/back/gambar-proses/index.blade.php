@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Gambar Proses</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Gambar Proses</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<form id="form-validation" action="{{ route('back.cms.gambar-proses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Ganti Konten Judul Gambar Proses
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input maxlength="51" type="text" class="form-control" name="judul" value="{{ $gambarProses !== null ? $gambarProses->judul : '' }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_1">Nama 1</label>
                        <input value="{{ $gambarProses !== null ? $gambarProses->nama_1 : '' }}" type="text" id="nama_1" name="nama_1" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gambar_1">Gambar 1</label>
                        <input type="file" class="form-control-file" name="gambar_1" required>
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $gambarProses != null ? $gambarProses->gambar($gambarProses->gambar_1) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_2">Nama 2</label>
                        <input value="{{ $gambarProses !== null ? $gambarProses->nama_2 : '' }}" type="text" id="nama_2" name="nama_2" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gambar_2">Gambar 2</label>
                        <input type="file" class="form-control-file" name="gambar_2" required>
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $gambarProses != null ? $gambarProses->gambar($gambarProses->gambar_2) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_3">Nama 3</label>
                        <input value="{{ $gambarProses !== null ? $gambarProses->nama_3 : '' }}" type="text" id="nama_3" name="nama_3" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gambar_3">Gambar 3</label>
                        <input type="file" class="form-control-file" name="gambar_3" required>
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $gambarProses != null ? $gambarProses->gambar($gambarProses->gambar_3) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_4">Nama 4</label>
                        <input value="{{ $gambarProses !== null ? $gambarProses->nama_4 : '' }}" type="text" id="nama_4" name="nama_4" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gambar_4">Gambar 4</label>
                        <input type="file" class="form-control-file" name="gambar_4" required>
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $gambarProses != null ? $gambarProses->gambar($gambarProses->gambar_4) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_5">Nama 5</label>
                        <input value="{{ $gambarProses !== null ? $gambarProses->nama_5 : '' }}" type="text" id="nama_5" name="nama_5" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gambar_5">Gambar 5</label>
                        <input type="file" class="form-control-file" name="gambar_5" required>
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $gambarProses != null ? $gambarProses->gambar($gambarProses->gambar_5) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </div>
</form>

@endsection

@push('js')
<script src="{{ asset('back_assets/dist/js/script.js') }}"></script>

<script>
    $('#form-validation').validate({
        rules: {
            judul: {
                maxlength: 40,
            },
            gambar_1: {
                filesize: 500000,
            },
            gambar_2: {
                filesize: 500000,
            },
            gambar_3: {
                filesize: 500000,
            },
            gambar_4: {
                filesize: 500000,
            },
            gambar_5: {
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
