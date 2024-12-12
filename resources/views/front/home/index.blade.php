@extends('layouts.common.app')

@section('content')
<header
class="page-header"
style="background: var(--layer-color),
url( {{ $header !== null ? $header->gambar($header->background) : asset('front_assets/images/pages/home/header-bg.jpg') }}) no-repeat center center;
background-size: cover"
>
    <div class="container-fluid px-4 px-md-5">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="headline font-weight-600 color-white mb-3">
                    @if ($header !== null)
                        {{ $header->judul }}
                    @else
                        Selamat datang di Ventolens.id!
                    @endif
                </h1>
                <p class="body-1 color-white mb-4">
                    @if ($header !== null)
                        {{ $header->deskripsi }}
                    @else
                    Selamat datang di Wedding Gallery kami, tempat yang sempurna untuk memulai perjalanan Anda menuju pernikahan yang indah dan tak terlupakan. Kami adalah galeri pernikahan yang didedikasikan untuk menyediakan segala yang Anda butuhkan untuk merencanakan hari yang spesial dan romantis.
                    @endif
                </p>

                <div>
                    <a class="btn btn-custom btn-lg" target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="daftarProduk">
    <img src="{{ asset('front_assets/images/pages/home/ornament.png') }}" class="ornament dapro-ornament">
    <div class="container-fluid px-4 px-md-5">
        <div class="header-divider"></div>
        <h2 class="header-1 color-black font-weight-600 text-center mb-32">
            @if ($produkListJudul !== null)
                {{ $produkListJudul->judul }}
            @else
                Pilihan Paket yang Cocok Untuk Kebutuhan Anda
            @endif
        </h2>

        <div class="row justify-content-md-center">
            @forelse ( $produkList as $item )
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card dapro-card shadow-sm">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="header-2 color-dark font-weight-500 dapro-card-title mb-3">{{ $item->nama }}</h3>
                            <p class="body-1 font-weight-400 color-grey mb-3">{{ $item->deskripsi }}</p>
                            <h4 class="header-1 font-weight-600 color-primary">Rp {{ number_format($item->harga,0,',','.') }}</h4>
                        </div>

                        <hr class="dapro-card-divider">


                        <ol class="list-unstyled pl-0 mb-4">
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">{{ $item->keunggulan_1 }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">{{ $item->keunggulan_2 }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">{{ $item->keunggulan_3 }}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">{{ $item->keunggulan_4 }}</p>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="text-center mt-5">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}" class="btn btn-custom">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card dapro-card shadow-sm">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="header-2 color-dark font-weight-500 dapro-card-title mb-3">Paket Dasar</h3>
                            <p class="body-1 font-weight-400 color-grey mb-3">
                                Paket ini mencakup layanan dasar untuk pernikahan Anda, termasuk ruangan, dekorasi, bunga, pernikahan sederhana, fotografi dan video dasar, serta perencanaan dasar.
                            </p>
                            <h4 class="header-1 font-weight-600 color-primary">Rp 1.5 Juta</h4>
                        </div>

                        <hr class="dapro-card-divider">


                        <ol class="list-unstyled pl-0 mb-4">
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Sesi pemotretan selama 2-4 jam</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">30-50 hasil foto yang di-edit (berkualitas tinggi).</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Highlight video berdurasi 1-2 menit (video cinematic).</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Beberapa paket menawarkan 1 set kostum, tetapi klien biasanya membawa sendiri.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">1 fotografer dan 1 videografer..</p>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="text-center mt-5">
                            <button class="btn btn-custom">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card dapro-card shadow-sm">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="header-2 color-dark font-weight-500 dapro-card-title mb-3">Paket Pernikahan Eksklusif</h3>
                            <p class="body-1 font-weight-400 color-grey mb-3">Paket ini mencakup semua layanan dasar yang tercantum di atas, ditambah dengan beberapa layanan ekstra seperti makanan dan minuman kelas atas, bunga eksklusif, fotografi dan video kelas atas, serta perencanaan penuh.</p>
                            <h4 class="header-1 font-weight-600 color-primary">Rp 4.5 Juta</h4>
                        </div>

                        <hr class="dapro-card-divider">


                        <ol class="list-unstyled pl-0 mb-4">
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Jumlah Foto: 30–50 foto yang telah diedit.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Durasi Pemotretan: 4–6 jam (setengah hari).</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Fotografer: 1–2 fotografer profesional.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Durasi Video Cinematic: 3–5 menit (highlights).</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Perekaman: Dengan 1 videografer, menggunakan kamera dan gimbal profesional.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Konsultasi tema atau konsep prewedding.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="text-center mt-5">
                            <button class="btn btn-custom">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card dapro-card shadow-sm">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="header-2 color-dark font-weight-500 dapro-card-title mb-3">Paket Desain</h3>
                            <p class="body-1 font-weight-400 color-grey mb-3">Paket ini mencakup layanan desain yang disesuaikan dengan kebutuhan dan preferensi Anda.</p>
                            <h4 class="header-1 font-weight-600 color-primary">Rp 5 Juta</h4>
                        </div>

                        <hr class="dapro-card-divider">


                        <ol class="list-unstyled pl-0 mb-4">
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Proses Foto Bisa tergantung keinginan Konsumen</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Bebas Memilih Lokasi berapapun itu</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Videografi dengan sutradara</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Antarjemput kendaraan di sediakan</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="media align-items-start">
                                    <img
                                    class="dapro-ic"
                                    width="18"
                                    height="18"
                                    src="{{ asset('front_assets/images/pages/home/dapro-ic.svg') }}"
                                    alt="icon">

                                    <div class="media-body">
                                        <p class="body-1 color-grey font-weight-grey mb-0">Include yang tertera di paket Eksklusif</p>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="text-center mt-5">
                            <button class="btn btn-custom">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section id="galeriProduk">
    <div class="container-fluid px-4 px-md-5">
        <div class="header-divider"></div>
        <h2 class="header-1 color-black font-weight-600 text-center mb-32">
            @if ($gambarProses !== null)
                {{ $gambarProses->judul }}
            @else
            Galeri Kegiatan Ventolens.id
            @endif
        </h2>

        <div class="gapro-button-container">
            <button aria-label="Previous Whatsapp button" class="btn gapro-btn prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button aria-label="Next Whatsapp button" class="btn gapro-btn next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="gapro-carousel">
            <div class="galeri-item">
                <img
                class="img-fluid gapro-img-small mb-4"
                @if ($gambarProses !== null)
                src="{{ $gambarProses->gambar($gambarProses->gambar_1) }}"
                @else
                src="{{ asset('front_assets/images/pages/home/images-home/hitam-putih/DSC02890.jpg') }}"
                @endif
                alt="{{ $gambarProses !== null ? $gambarProses->nama_1 : '' }} small">
            </div>
            <div class="galeri-item">
                <img
                class="img-fluid gapro-img-small mb-4"
                @if ($gambarProses !== null)
                src="{{ $gambarProses->gambar($gambarProses->gambar_2) }}"
                @else
                src="{{ asset('front_assets/images/pages/home/images-home/hitam-putih/DSC03182-h.jpg') }}"
                @endif
                alt="{{ $gambarProses !== null ? $gambarProses->nama_2 : '' }} small">
            </div>
            <div class="galeri-item">
                <img
                class="img-fluid gapro-img-small mb-4"
                @if ($gambarProses !== null)
                src="{{ $gambarProses->gambar($gambarProses->gambar_3) }}"
                @else
                src="{{ asset('front_assets/images/pages/home/images-home/hitam-putih/DSC03001.jpg') }}"
                @endif
                alt="{{ $gambarProses !== null ? $gambarProses->nama_3 : '' }} small">
            </div>
            <div class="galeri-item">
                <img
                class="img-fluid gapro-img-small mb-4"
                @if ($gambarProses !== null)
                src="{{ $gambarProses->gambar($gambarProses->gambar_4) }}"
                @else
                src="{{ asset('front_assets/images/pages/home/images-home/hitam-putih/DSC03184-h.jpg') }}"
                @endif
                alt="{{ $gambarProses !== null ? $gambarProses->nama_4 : '' }} small">
            </div>
            <div class="galeri-item">
                <img
                class="img-fluid gapro-img-small mb-4"
                @if ($gambarProses !== null)
                src="{{ $gambarProses->gambar($gambarProses->gambar_5) }}"
                @else
                src="{{ asset('front_assets/images/pages/home/images-home/hitam-putih/DSC03006.jpg') }}"
                @endif
                alt="{{ $gambarProses !== null ? $gambarProses->nama_5 : '' }} small">
            </div>
        </div>
    </div>
</section>

<section id="tentangKami">
    <div class="container-fluid px-4 px-md-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header-divider mx-0"></div>
                <h2 class="header-1 color-black font-weight-600 mb-3 text-center text-lg-left">
                    @if ($tentangKami !== null)
                        {{ $tentangKami->judul }}
                    @else
                    Ventolens.id Untuk Memenuhi Kebutuhan Anda
                    @endif
                </h2>
                <p class="body-1 color-grey font-weight-400 mb-4 text-center text-lg-left">
                    @if ($tentangKami !== null)
                        {{ $tentangKami->deskripsi }}
                    @else
                    Tim Wedding Gallery kami memiliki pengalaman yang luas di berbagai bidang Fotografi dan Sinematografi, telah membantu banyak klien.
                    @endif
                </p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a class="btn btn-custom" target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}">Hubungi Kami</a>
                </div>
            </div>

            <div class="col-lg-6 teka-img-container">
                <img
                class="img-fluid teka-img"
                width="498"
                height="422"
                @if ($tentangKami !== null)
                src="{{ $tentangKami->gambar() }}"
                @else
                src="{{ asset('front_assets/images/pages/home/images-home/DSC02913.jpg') }}"
                @endif
                alt="Tentang kami image">
            </div>
        </div>
    </div>
</section>

<section id="keunggulanPerusahaan">
    <div class="container-fluid px-4 px-md-5">
        <div class="header-divider"></div>
        <h2 class="header-1 color-black font-weight-600 text-center mb-32">
            @if ($keunggulanPerusahaan !== null)
                {{ $keunggulanPerusahaan->judul }}
            @else
            Keunggulan Kami Sebagai Penyedia Layanan Wedding Gallery
            @endif
        </h2>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 keper-item">
                <div class="media">
                    <img src="{{ asset('front_assets/images/pages/home/keper-ic-1.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="header-3 color-black font-weight-500">Pengalaman</h3>
                        <p class="body-1 color-grey font-weight-400">
                            Tim Wedding Gallery kami memiliki pengalaman yang luas di berbagai bidang hukum dan telah membantu banyak klien mengatasi masalah hukum yang kompleks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 keper-item">
                <div class="media">
                    <img src="{{ asset('front_assets/images/pages/home/keper-ic-2.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="header-3 color-black font-weight-500">Integritas dan Etika</h3>
                        <p class="body-1 color-grey font-weight-400">
                            Kami menjaga standar etika hukum yang tinggi dan berkomitmen untuk memberikan layanan yang adil, transparan, dan terbaik untuk klien kami.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 keper-item">
                <div class="media">
                    <img src="{{ asset('front_assets/images/pages/home/keper-ic-3.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="header-3 color-black font-weight-500">Solusi Inovatif</h3>
                        <p class="body-1 color-grey font-weight-400">
                            Kami selalu mencari solusi inovatif dan kreatif untuk masalah pernikahan yang kompleks, sehingga klien kami dapat meraih hasil yang terbaik.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 keper-item">
                <div class="media">
                    <img src="{{ asset('front_assets/images/pages/home/keper-ic-4.png') }}" alt="">

                    <div class="media-body">
                        <h3 class="header-3 color-black font-weight-500">Dukungan Tim</h3>
                        <p class="body-1 color-grey font-weight-400">
                            Selain dari Wedding Gallery, kami juga memiliki tim dukungan yang siap membantu klien kami dalam setiap tahap proses pernikahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="daftarTeam">
    <img src="{{ asset('front_assets/images/pages/home/ornament.png') }}" class="ornament date-ornament">
    <div class="container-fluid px-4 px-md-5">
        <div class="header-divider"></div>
        <h2 class="header-1 color-black font-weight-600 text-center mb-32">
            @if ($teamKamiJudul !== null)
                {{ $teamKamiJudul->judul }}
            @else
            Professional Team Ventolens.id
            @endif
        </h2>

        <div class="row">
            @forelse ($teamKami as $item)
            {{-- desktop --}}
            <div class="col-lg-3 col-md-6 col-12 d-sm-none d-lg-block date-item">
                <div class="card desktop">
                    <img src="{{ $item->gambar($item->gambar) }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">{{ $item->nama }}</h3>
                        <p class="body-1 color-grey font-weight-400">{{ $item->jobdesc }}</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ $item->gambar($item->sosmed_icon_1) }}" width="16" height="16" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ $item->gambar($item->sosmed_icon_2) }}" width="16" height="16" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- mobile --}}
            <div class="col-lg-3 col-md-6 col-12 date-item d-lg-none d-sm-block">
                <div class="card mobile">
                    <img src="{{ $item->gambar($item->gambar) }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">{{ $item->nama }}</h3>
                        <p class="body-1 color-grey font-weight-400">{{ $item->jobdesc }}</p>

                        <ul>
                            <li>
                                <a href="{{ $item->sosmed_icon_1 }}">
                                    <img src="{{ $item->gambar($item->sosmed_icon_1) }}" width="16" height="16" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="{{ $item->sosmed_icon_2 }}">
                                    <img src="{{ $item->gambar($item->sosmed_icon_2) }}" width="16" height="16" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            {{-- desktop --}}
            <div class="col-lg-3 col-md-6 col-12 d-none d-lg-block date-item">
                <div class="card desktop">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-1.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Alexander Pierce</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 d-none d-lg-block date-item">
                <div class="card desktop">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-2.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Ahmad Basuki</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 d-none d-lg-block date-item">
                <div class="card desktop">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-3.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Rekti Yoewono</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 d-none d-lg-block date-item">
                <div class="card desktop">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-4.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Kevin Parker</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- mobile --}}
            <div class="col-lg-3 col-md-6 col-12 date-item d-lg-none d-sm-block">
                <div class="card mobile">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-1.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Alexander Pierce</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 date-item d-lg-none d-sm-block">
                <div class="card mobile">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-2.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Ahmad Basuki</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 date-item d-lg-none d-sm-block">
                <div class="card mobile">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-3.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Rekti Yoewono</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 date-item d-lg-none d-sm-block">
                <div class="card mobile">
                    <img src="{{ asset('front_assets/images/pages/home/date-img-4.jpg') }}" alt="Team" class="card-img">

                    <div class="card-body">
                        <h3 class="header-3 color-black font-weight-500">Kevin Parker</h3>
                        <p class="body-1 color-grey font-weight-400">Tim Wedding Gallery</p>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/common/social-ic-2.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section id="clientKami">
    <div class="container px-4 px-md-5">
        <div class="header-divider"></div>
        <h2 class="header-1 color-black font-weight-600 text-center mb-32">
            @if ($clientKamiJudul !== null)
                {{ $clientKamiJudul->judul }}
            @else
            Client Kami
            @endif
        </h2>

        <div class="row">
            @forelse ($clientKami as $item)
            <div class="col-6 col-md-3  mb-4 mb-lg-0 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ $item->gambar() }}"
                alt="{{ $item->nama }}">
            </div>
            @empty
            <div class="col-6 col-md-3 mb-4 mb-lg-0 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-1.png') }}"
                alt="Client kami 1">
            </div>

            <div class="col-6 col-md-3 mb-4 mb-lg-0 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-2.png') }}"
                alt="Client kami 1">
            </div>

            <div class="col-6 col-md-3 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-3.png') }}"
                alt="Client kami 1">
            </div>

            <div class="col-6 col-md-3 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-4.png') }}"
                alt="Client kami 1">
            </div>
            <div class="col-6 col-md-3 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-4.png') }}"
                alt="Client kami 1">
            </div>
            <div class="col-6 col-md-3 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-3.png') }}"
                alt="Client kami 1">
            </div>
            <div class="col-6 col-md-3 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-2.png') }}"
                alt="Client kami 1">
            </div>
            <div class="col-6 col-md-3 clika-item">
                <img
                class="clika-img img-fluid"
                width="225"
                height="36"
                src="{{ asset('front_assets/images/pages/home/clika-img-1.png') }}"
                alt="Client kami 1">
            </div>
            @endforelse
        </div>
    </div>
</section>

<section id="whatsapp">
    <div class="container-fluid px-4 px-md-5">
        <div class="header-divider"></div>
        <h2 class="header-1 color-black font-weight-600 text-center mb-32">
            @if ($testimoniJudul !== null)
                {{ $testimoniJudul->judul }}
            @else
            Ulasan Positif Dari Customer Kami
            @endif
        </h2>

        <div class="wa-carousel-container">
            <div class="wa-button-container">
                <button aria-label="Previous Whatsapp button" class="btn wa-btn prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button aria-label="Next Whatsapp button" class="btn wa-btn next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="wa-carousel">
                @forelse ($testimoni as $item)
                <div>
                    <img
                    alt="{{ $item->nama }}"
                    class="img-fluid wa-img"
                    width="248"
                    height="434"
                    src="{{ $item->gambar() }}">
                </div>
                @empty
                <div>
                    <img
                    alt="whatsapp"
                    class="img-fluid wa-img"
                    width="248"
                    height="434"
                    src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                </div>

                <div>
                    <img
                    alt="whatsapp"
                    class="img-fluid wa-img"
                    width="248"
                    height="434"
                    src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                </div>

                <div>
                    <img
                    alt="whatsapp"
                    class="img-fluid wa-img"
                    width="248"
                    height="434"
                    src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                </div>

                <div>
                    <img
                    alt="whatsapp"
                    class="img-fluid wa-img"
                    width="248"
                    height="434"
                    src="{{ asset('front_assets/images/pages/home/wa-img.jpg') }}">
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<section id="promosi">
    <div class="container-fluid px-4 px-md-5">
        <div class="bg-promosi" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
url( {{ $promosi !== null ? $promosi->gambar() : asset('front_assets/images/pages/home/images-home/DSC03239.jpg') }}) no-repeat center center;
background-size: cover">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="headline color-white text-center mb-32">
                        @if ($promosi !== null)
                            {{ $promosi->judul }}
                        @else
                        Hubungi Kami Sekarang Untuk Mendapatkan
                        Layanan Terbaik Ventolens.id
                        @endif
                    </h2>

                    <div class="d-flex justify-content-center">
                        <a  target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}" class="btn promosi-btn btn-custom header-5">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('front_assets/css/pages/home/index.css') }}">
@endpush

@push('js')
<script src="{{ asset('front_assets/js/pages/home/index.js') }}"></script>
@endpush
