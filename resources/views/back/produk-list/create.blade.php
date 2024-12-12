@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Produk</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('back.cms.produk-list.index') }}">Produk</a></li>
                <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.produk-list.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input maxlength="21" type="text" id="nama" name="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" id="harga" name="harga" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea maxlength="267" class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keunggulan_1">Keunggulan 1</label>
                            <input maxlength="61" type="text" id="keunggulan_1" name="keunggulan_1" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keunggulan_2">Keunggulan 2</label>
                            <input maxlength="61" type="text" id="keunggulan_2" name="keunggulan_2" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keunggulan_3">Keunggulan 3</label>
                            <input maxlength="61" type="text" id="keunggulan_3" name="keunggulan_3" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="keunggulan_4">Keunggulan 4</label>
                            <input maxlength="61" type="text" id="keunggulan_4" name="keunggulan_4" class="form-control" required>
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
                maxlength: 20
            },
            deskripsi: {
                maxlength: 152
            },
            keunggulan_1: {
                maxlength: 36
            },
            keunggulan_2: {
                maxlength: 36
            },
            keunggulan_3: {
                maxlength: 36
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
