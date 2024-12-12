@extends('layouts.back.app')

@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Footer</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Footer</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <form id="form-validation" action="{{ route('back.cms.footer.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control p-1" name="logo">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->logo) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="tel" value="{{ $footer !== null ? $footer->deskripsi : '' }}" class="form-control" name="deskripsi" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="icon_telepon">Gambar Telepon</label>
                        <input type="file" class="form-control p-1" name="icon_telepon">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->icon_telepon) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="tel" value="{{ $footer !== null ? $footer->telepon : '' }}" class="form-control" name="telepon" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="icon_email">Gambar Email</label>
                        <input type="file" class="form-control p-1" name="icon_email">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->icon_email) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" value="{{ $footer !== null ? $footer->jam : '' }}" class="form-control" name="jam" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="icon_jam">Gambar Jam</label>
                        <input type="file" class="form-control p-1" name="icon_jam">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->icon_jam) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{ $footer !== null ? $footer->email : '' }}" class="form-control" name="email" required>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="icon_alamat">Gambar Alamat</label>
                        <input type="file" class="form-control p-1" name="icon_alamat">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->icon_alamat) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" value="{{ $footer !== null ? $footer->alamat : '' }}" class="form-control" name="alamat" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_icon_1">Gambar Sosmed 1</label>
                        <input type="file" class="form-control p-1" name="sosmed_icon_1">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->sosmed_icon_1) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_link_1">Link Sosmed 1</label>
                        <input type="text" value="{{ $footer !== null ? $footer->sosmed_link_1 : '' }}" class="form-control" name="sosmed_link_1" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_icon_2">Gambar Sosmed 2</label>
                        <input type="file" class="form-control p-1" name="sosmed_icon_2">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->sosmed_icon_2) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_link_2">Link Sosmed 2</label>
                        <input type="text" value="{{ $footer !== null ? $footer->sosmed_link_2 : '' }}" class="form-control" name="sosmed_link_2" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_icon_3">Gambar Sosmed 3</label>
                        <input type="file" class="form-control p-1" name="sosmed_icon_3">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->sosmed_icon_3) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_link_3">Link Sosmed 3</label>
                        <input type="text" value="{{ $footer !== null ? $footer->sosmed_link_3 : '' }}" class="form-control" name="sosmed_link_3" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_icon_4">Gambar Sosmed 4</label>
                        <input type="file" class="form-control p-1" name="sosmed_icon_4">
                        <a class="mt-3 btn btn-sm btn-primary" href="{{ $footer !== null ? $footer->gambar($footer->sosmed_icon_4) : asset('back_assets/img/public/noimage.png') }}" target="_blank">Preview Gambar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sosmed_link_4">Link Sosmed 4</label>
                        <input type="text" value="{{ $footer !== null ? $footer->sosmed_link_4 : '' }}" class="form-control" name="sosmed_link_4" required>
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
            logo: {
                filesize: 500000,
            },
            icon_telepon: {
                filesize: 500000,
            },
            icon_email: {
                filesize: 500000,
            },
            icon_alamat: {
                filesize: 500000,
            },
            sosmed_icon_1: {
                filesize: 500000,
            },
            sosmed_icon_2: {
                filesize: 500000,
            },
            sosmed_icon_3: {
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
