<footer class="footer">
    <div class="container-fluid px-3 px-md-5">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <p class="h1 mt-4 mb-4 text-danger">Ventolens.id</p>

                <p class="body-1 color-grey-lightest mb-4">
                    @if ($footer !== null)
                        {{ $footer->deskripsi }}
                    @else
                    tempat yang sempurna memulai perjalanan menuju pernikahan yang indah dan tak terlupakan. 
                    Kami adalah galeri pernikahan yang menyediakan segala yang Anda butuhkan.
                    @endif
                </p>

                <a target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp !== null ? $whatsapp->telepon : '' }}" class="btn btn-custom">Hubungi Kami</a>
            </div>

            <div class="col-md-6 col-lg-4 mt-lg-4 mb-5 mb-lg-0">
                <h3 class="header-3 color-white font-weight-500 mb-5">Hubungi Kami</h3>
                <div class="media align-items-center mb-3">
                    @if ($footer !== null)
                    <img class="footer-icon" width="20px" src="{{ $footer->gambar($footer->icon_telepon) }}" alt="...">
                    @else
                        <i class="fas fa-phone-alt footer-icon"></i>
                    @endif

                    <div class="media-body">
                        <address class="body-1 color-grey-lightest mb-0">{{ $footer !== null ? $footer->telepon : '0821-2345-7070' }}</address>
                    </div>
                </div>

                <div class="media align-items-center mb-3">
                    @if ($footer !== null)
                    <img class="footer-icon" width="20px" src="{{ $footer->gambar($footer->icon_email) }}" alt="...">
                    @else
                        <i class="fas fa-envelope footer-icon"></i>
                    @endif
                    <div class="media-body">
                        <address class="body-1 color-grey-lightest mb-0">{{ $footer !== null ? $footer->email : 'ahlinyaweb@gmail.com' }}</address>
                    </div>
                </div>

                <div class="media align-items-start mb-3">
                    @if ($footer !== null)
                        <img class="footer-icon" width="20px" src="{{ $footer->gambar($footer->icon_alamat) }}" alt="...">
                    @else
                        <i class="fas fa-map-marker-alt footer-icon"></i>
                    @endif

                    <div class="media-body">
                        <address class="body-1 color-grey-lightest mb-0">{{ $footer !== null ? $footer->alamat : 'Jl. Traktor No.123, Cisaranten Kulon, Kec. Arcamanik' }}</address>
                    </div>
                </div>

                <div class="media align-items-start">
                    @if ($footer !== null)
                        <img class="footer-icon" width="20px" src="{{ $footer->gambar($footer->icon_jam) }}" alt="...">
                    @else
                        <i class="fas fa-clock footer-icon"></i>
                    @endif

                    <div class="media-body">
                        <address class="body-1 color-grey-lightest mb-0">
                            @if ($footer !== null)
                                {{ $footer->jam }}
                            @else
                                Jam buka: 07:00 - 19:00
                            @endif
                        </address>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-lg-4">
                <h3 class="header-3 color-white font-weight-500 mb-4">Sosial Media Kami</h3>

                <div class="d-flex order-1 order-md-2">
                    <a class="footer-social-item" href="{{ $footer !== null ? $footer->sosmed_link_1 : 'https://www.instagram.com/ventolens/' }}">
                            <img
                            alt="Instagram Ahlinya Psikolog"
                            class="img-fluid"
                            @if ($footer !== null)
                                src="{{ $footer->gambar($footer->sosmed_icon_1) }}"
                            @else
                                src="{{ asset('front_assets/images/common/social-ic-1.png') }}"
                            @endif
                            >
                    </a>

                    <a class="footer-social-item" href="{{ $footer !== null ? $footer->sosmed_link_2 : '#!' }}">
                        <img
                        alt="Facebook Ahlinya Psikolog"
                        class="img-fluid"
                        @if ( $footer !== null)
                            src="{{ $footer->gambar($footer->sosmed_icon_2) }}"
                        @else
                            src="{{ asset('front_assets/images/common/social-ic-2.png') }}"
                        @endif
                        >
                    </a>

                    <a class="footer-social-item" href="{{ $footer !== null ? $footer->sosmed_link_3 : '#!' }}">
                        <img
                        alt="Facebook Ahlinya Psikolog"
                        class="img-fluid"
                        @if ($footer !== null)
                            src="{{ $footer->gambar($footer->sosmed_icon_3) }}"
                        @else
                            src="{{ asset('front_assets/images/common/social-ic-3.png') }}"
                        @endif
                        >
                    </a>

                    <a class="footer-social-item" href="{{ $footer !== null ? $footer->sosmed_link_4 : '#!' }}">
                        <img
                        alt="Facebook Ahlinya Psikolog"
                        class="img-fluid"
                        @if ( $footer !== null)
                            src="{{ $footer->gambar($footer->sosmed_icon_4) }}"
                        @else
                            src="{{ asset('front_assets/images/common/social-ic-4.png') }}"
                        @endif
                        >
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="footer-copyright">
        <div class="container px-3 px-md-5">
            <div class="d-flex justify-content-center">
                <small class="body-2 color-grey-lightest">Copyright © 2023 • All rights reserved • Ahlinyaweb</small>
            </div>
        </div>
    </section>
</footer>
