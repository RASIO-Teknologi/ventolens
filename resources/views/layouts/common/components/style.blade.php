{{-- Start Style Css --}}
<link rel="icon" type="image/x-icon"
@if ($header !== null)
href="{{ $header->gambar($header->logo) }}"
@else
href="{{ asset('front_assets/images/common/logo.png') }}"
@endif
/>
<link href="{{ asset('front_assets/css/common/styles.css') }}" rel="stylesheet" />
<link href="{{ asset('front_assets/css/common/font.css') }}" rel="stylesheet" />
<link href="{{ asset('front_assets/css/common/color.css') }}" rel="stylesheet" />
<link href="{{ asset('front_assets/css/common/index.css') }}" rel="stylesheet" />
<link href="{{ asset('front_assets/css/common/chatbot.css') }}" rel="stylesheet" />
{{-- End Style Css --}}

{{-- Font Awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
{{-- End Font Awesome --}}

{{-- Font Declaration --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
{{-- Local CSS --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stack('css')
