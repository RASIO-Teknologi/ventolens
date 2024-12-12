<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="Ahlinya Konsultan Pajak" />
        <meta name="description" content="Ahlinya Konsultan Pajak" />
        <meta name="author" content="Ahlinya Konsultan Pajak" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @if(View::hasSection('title'))
                @yield('title')
            @else
                Ahlinya Ahlinya Konsultan Pajak
            @endif
        </title>

        @include('layouts.common.components.style')

    </head>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    @if ($whatsapp != null)
                    <!-- <a class="text-decoration-none" target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $whatsapp->telepon }}">
                        <img src="{{ asset('front_assets/images/common/fab-wa-ic.png') }}" class="img-fluid fab-wa" alt="icon">
                    </a> -->
                    @else
                    <!-- <a class="text-decoration-none" href="https://api.whatsapp.com/send?phone=6281322430330" target="_blank">
                        <img src="{{ asset('front_assets/images/common/fab-wa-ic.png') }}" class="img-fluid fab-wa" alt="icon">
                    </a>
                    @endif -->
                    <button class="btn btn-whatsapp opening chatBotTrigger">
                        <i class="fab fa-whatsapp"></i>
                    </button>
                    @include('layouts.common.components.chatbot')

                    @include('layouts.common.components.navbar')

                    @yield('content')
                </main>
            </div>
            <div id="layoutDefault_footer">
                @include('layouts.common.components.footer')
            </div>
        </div>
        @include('layouts.common.components.script')
    </body>
</html>
