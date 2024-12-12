// function
const parseToIsoDate = (date = new Date()) => new Date(date).toISOString();
const parseDate = (date = new Date) => new Date(date).toLocaleDateString('id-ID', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
});
const parseTime = (date = new Date) => new Date(date).toLocaleTimeString('id-ID', {
    hour: '2-digit',
    minute: '2-digit',
    hour12: false
})

// Chat
var objDiv = document.getElementById("chatElement");
$('.chatBotTrigger').click(function () {
    $('#ppkmModal').modal('hide')
    if($('#chatBotTrigger').hasClass('conversation')) {
        $('#chatbotContainer').addClass('active');
        $('.cb-card-conversation').addClass('active');
    } else {
        $('#chatbotContainer').addClass('active');
        $('.cb-card-opening').addClass('active');
    }
});

$('.cb-close-opening').click(function () {
    $('#chatbotContainer').removeClass('active');
    $('.cb-card-opening').removeClass('active');
});

$('.cb-close-conversation').click(function () {
    $('#chatbotContainer').removeClass('active');
    $('.cb-card-conversation').removeClass('active');
});

$('#chatBotTriggerConversation').click(function () {
    $('.cb-card-opening').removeClass('active');
    $('#chatBotTrigger.opening').removeClass('opening').addClass('conversation');
    setTimeout(() => {
        $('.cb-card-conversation').addClass('active');
        $('#aigaReplyOpener').delay(500).fadeIn(500)
        $('#aigaReplyHello').delay(1000).fadeIn(500)
        $('#aigaReplyAsk').delay(2000).fadeIn(500)
        $('#nameReply').delay(3000).fadeIn(500)
    }, 500);
});


// submit nama
$('#nameSubmit').on('click', function () {
    let nama = $('#nameInput').val();

    if(nama) {
        objDiv.scrollTop = objDiv.scrollHeight;

        $('#userReply1').find('.chat-text').text(nama);
        $('#userReply1').show()

        $('#nameReply').hide();

        $('#jenisBajuContainer').find('.chat-text').text(`Baik, Mas/Mba ${nama}. Apa yang bisa saya bantu hari ini?`)
        $('#jenisBajuContainer').delay(500).fadeIn(500)

        $('#chooseJenisContainer').delay(800).fadeIn(500)

        setTimeout(() => {
            objDiv.scrollTop = objDiv.scrollHeight;
        }, 2000);
    } else {
        alert('Form wajib diisi!');
    }
});

// Select Jenis
$('#produkSubmit').click(function (e) {
    const val = $('#produkInput').val();

    if(!val) return alert('Tolong pilih keperluan Mas/Mba!');

    let replyUser = `Ingin ${val}`;

    objDiv.scrollTop = objDiv.scrollHeight;

    $('#kuantitasContainer').find('span').text($('#nameInput').val())

    $('#chooseJenisContainer').removeClass('d-flex').hide();

    $('#userReply3').find('.chat-text').text(replyUser);
    $('#userReply3').show()

    if (val.toLowerCase() === "reservasi tempat") {
        $('#kuantitasContainer').delay(500).fadeIn(500)
        $('#inputKuantitasContainer').delay(800).fadeIn(500)
    } else {
        $('#n-choice').delay(500).fadeIn(500)
        $('#i-n-choice-container').delay(800).fadeIn(500)
    }


    setTimeout(() => {
        objDiv.scrollTop = objDiv.scrollHeight;
    }, 2000);
});

$('#kuantitasInput').on('input', function() {
    if ($(this).val() < 0) {
        $(this).val(1);
    }
});

// Submit kuantitas
$('#kuantitasSubmit').on('click', function() {
    const kuantitas = $('#kuantitasInput').val();

    if(!kuantitas) return alert('Tolong pilih tanggal reservasi!')

    const currentDate = parseToIsoDate();
    const val = parseToIsoDate(kuantitas);

    if (val < currentDate) return alert('Tanggal yang dipilih telah lewat!');

    objDiv.scrollTop = objDiv.scrollHeight;

    $('#userReply4').find('.chat-text').text(`Ingin reservasi jam ${parseTime(kuantitas)} hari ${parseDate(kuantitas)}`);
    $('#userReply4').show()

    $('#inputKuantitasContainer').hide();

    $('#tanggalContainer').delay(500).fadeIn(500)

    $('#inputTanggalContainer').delay(800).fadeIn(500)

    setTimeout(() => {
        objDiv.scrollTop = objDiv.scrollHeight;
    }, 2000);
})

$('#tanggalInput').on('change', function(e) {
    const val = e.target.value

    if(!val) return alert('Tolong masukan jumlah orang yang akan datang!')

    if(val < 1) {
        alert('Jumlah orang minimal 1 orang!')
        $(this).val(1)
    }

    return
})

// Submit tanggal
$('#tanggalSubmit').on('click', function() {
    let tanggal = $('#tanggalInput').val();

    objDiv.scrollTop = objDiv.scrollHeight;

    if(tanggal) {
        $('#userReply6').find('.chat-text').text(`Reservasi untuk ${tanggal} orang`);
        $('#userReply6').show()

        $('#inputTanggalContainer').hide();

        $('#nomorContainer').delay(500).fadeIn(500)

        $('#inputNomorContainer').delay(800).fadeIn(500)

        setTimeout(() => {
            objDiv.scrollTop = objDiv.scrollHeight;
        }, 2000);
    } else {
        alert('Form wajib diisi!');
    }
})


$('#nomorInput').on('input', function() {
    if ($(this).val() < 0) {
        $(this).val(1);
    }
});

// Submit Telepon
$('#nomorSubmit').on('click', function() {
    let nomor = $('#nomorInput').val();

    if (!nomor) return alert('Tolong masukan sesuatu!')

    $('#userReply7').find('.chat-text').text(nomor);
    $('#userReply7').show()

    $('#inputNomorContainer').hide();

    $('#desainContainer').delay(500).fadeIn(500)

    $('#desainSelectContainer').delay(800).fadeIn(500)

    setTimeout(() => {
        objDiv.scrollTop = objDiv.scrollHeight;
    }, 2000);
})

$('.chooseDesain').click(function () {
    let jenis = $(this).data('jenis');
    let replyUser = "";

    objDiv.scrollTop = objDiv.scrollHeight;

    if(jenis == 'Ya') {
        replyUser = 'Pilih menu sekarang'
        $('#selectDesain').val(jenis);
        $('#desainSelectContainer').removeClass('d-flex').hide()
        $('#userReply8').find('.chat-text').text(replyUser);
        $('#userReply8').show()
        $('#y-choice').delay(500).fadeIn(500)
        $('#i-y-choice-container').delay(500).fadeIn(500)
    } else {
        replyUser = 'Tidak, nanti saja'
        $('#selectDesain').val(jenis);
        $('#desainSelectContainer').removeClass('d-flex').hide()
        $('#userReply8').find('.chat-text').text(replyUser);
        $('#userReply8').show()
        $('#n-choice').delay(500).fadeIn(500)
        $('#i-n-choice-container').delay(500).fadeIn(500)
    }

    setTimeout(() => {
        objDiv.scrollTop = objDiv.scrollHeight;
    }, 2000);
});

// IYS
$('body').on('click', '#btnAddMenu', function() {
    let uniqueId = Math.random().toString(36).substr(2, 9);

    let html = `
    <div class="form-row mt-3" id="i-y-choice-container-${uniqueId}">
        <section class="col-lg-7 mb-2">
            <select class="form-control form-control-sm" name="menu[]" id="i-y-choice-input-${uniqueId}">
                <option selected>Pilih menu</option>
            </select>
        </section>
        <section class="col-lg-3 mb-2">
            <input type="number" class="form-control form-control-sm" name="jumlah[]" placeholder="Jmlh">
        </section>
        <section class="col-lg-2 mb-2">
            <button class="btn btn-danger btn-sm btnDeleteMenu" data-uniqid="${uniqueId}">
                <i class="fas fa-trash"></i>
            </button>
        </section>
    </div>
    `
    fetchDataMenu('#i-y-choice-input-' + uniqueId);

    $('#newMenuContainer').append(html)
})

$('body').on('click', '.btnDeleteMenu', function() {
    let uniqueId = $(this).data('uniqid')
    $('body').find(`#i-y-choice-container-${uniqueId}`).remove()
})

fetchDataMenu('#i-y-choice-input')

function fetchDataMenu(menuInput) {
    let url = "/chatbot-menu-data"

    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'JSON',
        success: function(data) {
            let options = ''
            options += `<option value="">Pilih Menu</option>`
            $.each(data, function() {
                options += `<option value="${this.name}">${this.name}</option>`
            })

            $('body').find(menuInput).html(options)
        }
    })
}

$('#i-y-choice-submit').click(function() {
    var result = {};
    $("[name='menu[]']").each(function(index) {
        result[index] = {
            name: $(this).val(),
            qty: $("[name='jumlah[]']").eq(index).val()
        };
    });

    let menusResult = ''
    $.each(result, function(key, value) {
        menusResult += `${parseInt(key) + 1}. ${value.name}, jumlah ${value.qty}\n`;
    });

    if (!menusResult) return alert('Tolong pilih menu!')

    $('#i-y-choice-reply').find('.chat-text').text(menusResult);
    $('#i-y-choice-reply').show()
    $('#i-y-choice-container').hide();

    $('#n-choice').delay(500).fadeIn(500)
    $('#i-n-choice-container').delay(800).fadeIn(500)

    setTimeout(() => {
        objDiv.scrollTop = objDiv.scrollHeight;
    }, 2000);
});

$('#i-n-choice-input').on('change', function(e) {
    const val = e.target.value

    if (!val) return alert('Tolong masukkan nomor whatsapp!')

    if(!/^\d+$/.test(val)) return alert('Nomor whatsapp harus berupa angka!')

    return
})

$('#i-n-choice-submit').click(function() {
    const incVal = $('#i-n-choice-input').val();
    const name = $('#nameInput').val()
    const time = parseTime($('#kuantitasInput').val())
    const date = parseDate($('#kuantitasInput').val())
    const total = $('#tanggalInput').val()
    const area = $('#nomorInput').val()

    var result = {};
    $("[name='menu[]']").each(function(index) {
        result[index] = {
            name: $(this).val(),
            qty: $("[name='jumlah[]']").eq(index).val()
        };
    });

    let menusResult = ''
    $.each(result, function(key, value) {
        menusResult += `${parseInt(key) + 1}. ${value.name}, jumlah ${value.qty}\n`;
    });


    if (!incVal) return alert('Tolong masukkan nomor whatsapp!')

    $('#i-n-choice-reply').find('.chat-text').text(`Nomor whatsapp saya +62${incVal}`);
    $('#i-n-choice-reply').show()
    $('#i-n-choice-container').hide();

    $('#submitWhatsappContainer').delay(500).fadeIn(500)
    $('#submitWhatsappButton').delay(500).fadeIn(500)

    if ($('#produkInput').val().toLowerCase() === 'reservasi tempat') {
        $('#msg1').text(`Kami telah mencatat permintaan reservasi Mas/Mba:  

            Jam: ${time}
            Tanggal: ${date},
            Jumlah: ${total} orang
            Area: ${area}
            Menu:
            ${menusResult}`)
        $('#msg2').text(`Silahkan klik lanjutkan pesan untuk melakukan reservasi lanjutan`)
    } else {
        $('#msg1').hide()
        $('#msg2').text(`Silahkan klik lanjutkan pesan untuk melakukan reservasi lanjutan`)
    }

    $('#msg1').delay(500).fadeIn(500)
    $('#msg2').delay(500).fadeIn(500)

    setTimeout(() => {
        objDiv.scrollTop = objDiv.scrollHeight;
    }, 2000);
})

$('#submitWhatsapp').click(function() {
    const noTel = 6281329000177
    const name = $('#nameInput').val()
    const time = parseTime($('#kuantitasInput').val())
    const date = parseDate($('#kuantitasInput').val())
    const total = $('#tanggalInput').val()
    const area = $('#nomorInput').val()
    let jenis = $('#selectDesain').val();
    let menusResult = ''

    if(jenis == 'Ya') {
        var result = {};
        $("[name='menu[]']").each(function(index) {
            result[index] = {
                name: $(this).val(),
                qty: $("[name='jumlah[]']").eq(index).val()
            };
        });

        $.each(result, function(key, value) {
            menusResult += `%0a${parseInt(key) + 1}. ${value.name}, jumlah ${value.qty}`;
        });
    } else {
        menusResult = 'Belum Memilih Menu';
    }

    let message = '';

    if($('#produkInput').val().toLowerCase() === 'reservasi tempat') {
        message = `https://wa.me/${noTel}?text=Halo CS Liwet Asep Stroberi, saya ingin melakukan reservasi.
        %0a%0aDengan detail reservasi sebagai berikut:
        %0a- Reservasi atas nama: ${name}
        %0a- Waktu dan tanggal reservasi: ${time} ${date}
        %0a- Jumlah: ${total} orang
        %0a- Request area khusus: ${area}
        %0a- Menu: ${menusResult}
        %0a%0aMohon bantuannya untuk segera direspon`
    } else {
        message = `https://wa.me/${noTel}?text=Halo CS Liwet Asep Stroberi, saya ${name} ingin berbicara dengan CS.`
    }

    var win = window.open(message, '_blank');

    storeData()
    myService.getUrl().then(function (url) {
        win.location = url
    })
});
