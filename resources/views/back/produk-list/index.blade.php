@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Produk List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Produk List</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Ganti Konten Judul Produk List
        </div>
    </div>
    <form id="form-validation" action="{{ route('back.cms.produk-list.judul.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input maxlength="36" type="text" class="form-control" name="judul" value="{{ $produkListJudul !== null ? $produkListJudul->judul : '' }}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Tambah Produk
        </div>
        <div class="float-right">
            <div class="btn-group">
                <a href="{{ route('back.cms.produk-list.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered" id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('back_assets/dist/js/script.js') }}"></script>
<script>
    var table;
    table = $('#table').DataTable({
        "responsive": true,
        "pagingType": "simple_numbers",
        "autoWidth": false,
        'pageLength': 10,
        "lengthMenu": [10, 25, 50, 100],
        "processing": true,
        "language": {
            "processing": '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>'
        },
        "serverSide": true,
        "searching": true,
        "ajax": {
            "headers": {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            "url": "{{ route('api.back.cms.produk-list') }}",
            "dataType": "json",
            "type": "POST"
        },
        "columns": [
            {
                "data": "no",
                "orderable": false,
                "className": "align-middle"
            },
            {
                "data": "nama",
                "className": "align-middle"
            },
            {
                "data": "harga",
                "className": "align-middle"
            },
            {
                "data": "actions",
                "orderable": false,
                "className": "text-center align-middle"
            }
        ]
    })

    $('#form-validation').validate({
        rules: {
            judul: {
                maxlength: 35
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
