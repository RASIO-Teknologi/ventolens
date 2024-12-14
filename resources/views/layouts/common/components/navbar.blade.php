<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent fixed-top">
    <div class="container-fluid">
        <a href="#">
            <p class="h1 mt-4 mb-4 custom-font-color-grey">Ventolens.id</p>
            <!-- <img
                alt="Logo"
                class="img-fluid navbar-logo"
                width="117"
                height="48"
                @if ($header !== null)
                src="{{ $header->gambar($header->logo) }}"
                @else
                src="{{ asset('front_assets/images/common/navbar-logo.svg') }}"
                @endif
            > -->
        </a>
        <button
            class="navbar-toggler color-black"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars color-black"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pt-2 pb-0 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#daftarProduk">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentangKami">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#clientKami">Our Client</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
