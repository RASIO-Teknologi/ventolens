@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Team Kami</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('back.cms.team-kami.index') }}">Team Kami</a></li>
                <li class="breadcrumb-item active">Tambah Team Kami</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.team-kami.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jobdesc">Jobdesc</label>
                            <input type="text" id="jobdesc" name="jobdesc" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gambar">Upload Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sosmed_icon_1">Sosmed Gambar 1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="sosmed_icon_1">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sosmed_link_1">Sosmed Link 1</label>
                            <input type="text" id="sosmed_link_1" name="sosmed_link_1" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sosmed_icon_2">Sosmed Gambar 2</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="sosmed_icon_2">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sosmed_link_2">Sosmed Link 2</label>
                            <input type="text" id="sosmed_link_2" name="sosmed_link_2" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
</div>
@endsection

@push('js')
<script>
    $('#form-validation').validate({
        rules: {
            nama: {
                maxlength: 70,
            },
            jobdesc: {
                maxlength: 70,
            },
            pengalaman: {
                maxlength: 70,
            },
            gambar: {
                filesize: 500000,
            },
            sosmed_icon_1: {
                filesize: 500000,
            },
            sosmed_icon_2: {
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
