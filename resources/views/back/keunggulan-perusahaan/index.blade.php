@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Keunggulan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Keunggulan</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.keunggulan-perusahaan.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input maxlength="41" type="text" class="form-control" name="judul" value="{{ $keunggulan != null ? $keunggulan->judul : '' }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_gambar_1">Gambar Keunggulan 1</label>
                        <input type="file" class="form-control" name="keunggulan_gambar_1">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $keunggulan != null ? $keunggulan->gambar($keunggulan->keunggulan_gambar_1) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_judul_1">Judul Keunggulan 1</label>
                        <input maxlength="16" type="text" class="form-control" name="keunggulan_judul_1" value="{{ $keunggulan != null ? $keunggulan->keunggulan_judul_1 : '' }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="keunggulan_deskripsi_1">Deskripsi Keunggulan 1</label>
                        <input maxlength="109" type="text" class="form-control" name="keunggulan_deskripsi_1" value="{{ $keunggulan != null ? $keunggulan->keunggulan_deskripsi_1 : '' }}" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_gambar_2">Gambar Keunggulan 2</label>
                        <input type="file" class="form-control" name="keunggulan_gambar_2">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $keunggulan != null ? $keunggulan->gambar($keunggulan->keunggulan_gambar_2) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_judul_2">Judul Keunggulan 2</label>
                        <input maxlength="16" type="text" class="form-control" name="keunggulan_judul_2" value="{{ $keunggulan != null ? $keunggulan->keunggulan_judul_2 : '' }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="keunggulan_deskripsi_2">Deskripsi Keunggulan 2</label>
                        <input maxlength="109" type="text" class="form-control" name="keunggulan_deskripsi_2" value="{{ $keunggulan != null ? $keunggulan->keunggulan_deskripsi_2 : '' }}" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_gambar_3">Gambar Keunggulan 3</label>
                        <input type="file" class="form-control" name="keunggulan_gambar_3">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $keunggulan != null ? $keunggulan->gambar($keunggulan->keunggulan_gambar_3) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_judul_3">Judul Keunggulan 3</label>
                        <input maxlength="16" type="text" class="form-control" name="keunggulan_judul_3" value="{{ $keunggulan != null ? $keunggulan->keunggulan_judul_3 : '' }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="keunggulan_deskripsi_3">Deskripsi Keunggulan 3</label>
                        <input maxlength="109" type="text" class="form-control" name="keunggulan_deskripsi_3" value="{{ $keunggulan != null ? $keunggulan->keunggulan_deskripsi_3 : '' }}" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_gambar_4">Gambar Keunggulan 4</label>
                        <input type="file" class="form-control" name="keunggulan_gambar_4">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $keunggulan != null ? $keunggulan->gambar($keunggulan->keunggulan_gambar_4) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="keunggulan_judul_4">Judul Keunggulan 4</label>
                        <input maxlength="16" type="text" class="form-control" name="keunggulan_judul_4" value="{{ $keunggulan != null ? $keunggulan->keunggulan_judul_4 : '' }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="keunggulan_deskripsi_4">Deskripsi Keunggulan 4</label>
                        <input maxlength="109" type="text" class="form-control" name="keunggulan_deskripsi_4" value="{{ $keunggulan != null ? $keunggulan->keunggulan_deskripsi_4 : '' }}" required>
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
                maxlength: 50,
            },
            keunggulan_judul_1: {
                maxlength: 25,
            },
            keunggulan_deskripsi_1: {
                maxlength: 140,
            },
            keunggulan_judul_2: {
                maxlength: 25,
            },
            keunggulan_deskripsi_2: {
                maxlength: 140,
            },
            keunggulan_judul_3: {
                maxlength: 25,
            },
            keunggulan_deskripsi_3: {
                maxlength: 140,
            },
            keunggulan_judul_4: {
                maxlength: 25,
            },
            keunggulan_deskripsi_4: {
                maxlength: 140,
            },
            keunggulan_gambar_1: {
                filesize: 500000,
            },
            keunggulan_gambar_2: {
                filesize: 500000,
            },
            keunggulan_gambar_3: {
                filesize: 500000,
            },
            keunggulan_gambar_4: {
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
