<section id="chatbotContainer">
    <article class="cb-card-opening card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="h1 mt-4 mb-4 text-danger">Ventolens.id</p>

                <button class="btn cb-close cb-close-opening">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <h2 class="header-2 color-black font-weight-700 mb-2">Selamat datang di Ventolens.id!</h2>
            <p class="body-1 color-grey font-weight-400 mb-5">Tempat sempurna memulai perjalanan Anda menuju pernikahan</p>

            <button id="chatBotTriggerConversation" class="btn btn-custom font-weight-700 btn-block mb-3" style="text-wrap: pretty;">Mulai Chat Dengan Customer Service</button>
            <small class="body-2 font-weight-700 color-black d-block text-center">Powered By Ahlinyaweb.com</small>
        </div>
    </article>

    <article class="cb-card-conversation card">
        <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom p-2">
                <img
                class="img-fluid navbar-logo mr-2"
                src="{{ asset('front_assets/images/common/navbar-logo.svg') }}"
                alt="Logo Asep Stroberik">

            <button class="btn cb-close cb-close-conversation">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="card-body p-3" id="chatElement">
            <article class="chat-container aiga media">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" id="aigaReplyOpener" style="display: none; text-wrap: pretty;">
                            Selamat Datang di Ventolens.id!<br>galeri pernikahan yang spesial dan romantis.
                        </div>
                        <div class="chat-text aiga" id="aigaReplyHello" style="display: none; text-wrap: pretty;">
                            Saya bisa membantu Anda untuk reservasi maupun bertanya seputar Ventolens.id
                        </div>
                        <div class="chat-text aiga" id="aigaReplyAsk" style="display: none">Dengan siapa kami berbicara?</div>
                    </div>
                </div>
            </article>

            {{-- Input nama --}}
            <article class="chat-container input" id="nameReply" style="display: none">
                <input class="form-control" placeholder="Masukan nama lengkap anda" id="nameInput" required></input>
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-custom cb-data-keluhan btn-sm" id="nameSubmit">Kirim Data</button>
                </div>
            </article>
            {{-- Input nama --}}

            <article class="chat-container user" id="userReply1" style="display: none">
                <div class="chat-text user"></div>
            </article>

            <article class="chat-container aiga media" id="jenisBajuContainer" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga">
                        </div>
                    </div>
                </div>
            </article>

            <article class="chat-container user" id="userReply2" style="display: none">
                <div class="chat-text user"></div>
            </article>

            {{-- produk submit --}}
            <article class="chat-container" id="chooseJenisContainer" style="display: none !important">
                {{-- <input type="text" class="form-control" placeholder="Masukkan nama bunga" id="produkInput"> --}}
                <select class="form-control" id="produkInput">
                    <option selected disabled>Pilih keperluan</option>
                    <option>Reservasi tempat</option>
                    <option>Berbicara dengan CS</option>
                </select>
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-custom cb-data-keluhan btn-sm" id="produkSubmit">Kirim Data</button>
                </div>
            </article>
            {{-- produk submit --}}

            <article class="chat-container user" id="userReply3" style="display: none">
                <div class="chat-text user"></div>
            </article>

            <article class="chat-container aiga media" id="kuantitasContainer" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" id="aigaReplyHello">
                            Silahkan, untuk kapan Mas/Mba <span></span> ingin melakukan reservasi?
                        </div>
                    </div>
                </div>
            </article>

            {{-- Input kuantitas --}}
            <article class="chat-container input" id="inputKuantitasContainer" style="display: none !important">
                {{-- <input type="number" class="form-control" value="1" min="1" id="kuantitasInput"> --}}
                <input type="datetime-local" class="form-control" name="kuantitasInput" id="kuantitasInput">
                {{-- <small class="text-muted">Masukkan dalam bentuk pcs</small> --}}
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-custom cb-data-keluhan btn-sm" id="kuantitasSubmit">Kirim Data</button>
                </div>
            </article>
            {{-- Input kuantitas --}}

            <article class="chat-container user" id="userReply4" style="display: none">
                <div class="chat-text user"></div>
            </article>

            <article class="chat-container user" id="userReply5" style="display: none">
                <div class="chat-text user"></div>
            </article>

            <article class="chat-container aiga media" id="tanggalContainer" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" id="aigaReplyHello">
                            Baik, untuk berapa orang?
                        </div>
                    </div>
                </div>
            </article>

            {{-- Input tanggal --}}
            <article class="chat-container input" id="inputTanggalContainer" style="display: none !important">
                <input type="number" class="form-control" id="tanggalInput" value="1" min="1">
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-custom cb-data-keluhan btn-sm" id="tanggalSubmit">Kirim Data</button>
                </div>
            </article>
            {{-- Input tanggal --}}

            <article class="chat-container user" id="userReply6" style="display: none">
                <div class="chat-text user"></div>
            </article>

            <article class="chat-container aiga media" id="nomorContainer" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" id="aigaReplyHello">
                            Apakah ada permintaan khusus?
                        </div>
                    </div>
                </div>
            </article>

            {{-- Input nomor --}}
            <article class="chat-container input" id="inputNomorContainer" style="display: none !important">
                <input type="text" class="form-control" id="nomorInput" placeholder="Tidak ada/Ada">
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-custom cb-data-keluhan btn-sm" id="nomorSubmit">Kirim Data</button>
                </div>
            </article>
            {{-- Input tanggal --}}

            <article class="chat-container user" id="userReply7" style="display: none">
                <div class="chat-text user"></div>
            </article>

            <article class="chat-container aiga media" id="desainContainer" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" id="aigaReplyHello">
                            Baik, apakah ingin memilih menu sekarang?
                        </div>
                    </div>
                </div>
            </article>

            {{-- Pilih sudah punya desain --}}
            <article class="chat-container button d-flex justify-content-center flex-wrap" id="desainSelectContainer" style="display: none !important">
                <button class="btn btn-custom cb-data-keluhan chooseDesain m-2" data-jenis="Ya">Ya</button>
                <button class="btn btn-custom cb-data-keluhan chooseDesain m-2" data-jenis="Tidak">Tidak</button>
                <input type="hidden" id="selectDesain">
            </article>
            {{-- Pilih sudah punya desain --}}

            <article class="chat-container user" id="userReply8" style="display: none">
                <div class="chat-text user"></div>
            </article>

            {{-- YC --}}
            {{-- QYC --}}
            <article class="chat-container aiga media" id="y-choice" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" id="aigaReplyHello">
                            Silahkan pilih menu dibawah ini
                        </div>
                    </div>
                </div>
            </article>

            {{-- IYC --}}
            <article class="chat-container" id="i-y-choice-container" style="display: none !important">
                <div class="form-row">
                    <section class="col-lg-8 mb-2">
                        <select class="form-control form-control-sm" name="menu[]" id="i-y-choice-input">
                            <option selected>Pilih menu</option>
                        </select>
                    </section>
                    <section class="col-lg-4 mb-2">
                        <input type="number" class="form-control form-control-sm" name="jumlah[]" placeholder="Jmlh">
                    </section>
                </div>

                <div id="newMenuContainer"></div>

                <div class="d-flex justify-content-end mt-3">
                    <button class="btn btn-outline-danger mr-3 btn-sm" id="btnAddMenu">Tambah Menu</button>
                    <button class="btn btn-custom cb-data-keluhan btn-sm" id="i-y-choice-submit">Kirim Data</button>
                </div>
            </article>

            {{-- RYC --}}
            <article class="chat-container user" id="i-y-choice-reply" style="display: none">
                <div class="chat-text user" style="white-space: pre-line"></div>
            </article>
            {{-- EYC --}}

            {{-- NC --}}
            {{-- QNC --}}
            <article class="chat-container aiga media" id="n-choice" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" id="aigaReplyHello">
                            Baik, boleh kami meminta nomor whatsapp yang bisa dihubungi?
                        </div>
                    </div>
                </div>
            </article>

            {{-- INC --}}
            <article class="chat-container input" id="i-n-choice-container" style="display: none !important">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                    </div>
                    <input type="text" class="form-control" id="i-n-choice-input" placeholder="81234567890" aria-label="whatsapp" aria-describedby="number whatsapp">
                </div>
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-custom cb-data-keluhan btn-sm" id="i-n-choice-submit">Kirim Data</button>
                </div>
            </article>

            {{-- RYC --}}
            <article class="chat-container user" id="i-n-choice-reply" style="display: none">
                <div class="chat-text user"></div>
            </article>
            {{-- ENC --}}

            <article class="chat-container aiga media" id="submitWhatsappContainer" style="display: none !important">
                <div class="media align-items-end">
                    <i class="fas fa-user color-primary header-1 mr-3"></i>

                    <div class="media-body">
                        <div class="chat-text aiga" style="white-space: pre-line" id="msg1"></div>
                        <div class="chat-text aiga" id="msg2"></div>
                    </div>
                </div>
            </article>

            <article class="chat-container button d-flex justify-content-center flex-wrap" id="submitWhatsappButton" style="display: none !important">
                <button class="btn btn-layout btn-block cb-data-keluhan m-2" id="submitWhatsapp">Lanjutkan Pesan</button>
            </article>
        </div>
    </article>
</section>
