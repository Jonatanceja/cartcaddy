<!DOCTYPE html>
<html lang="{{ $page->language ?? 'es' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
        <link rel="manifest" href="/assets/images/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
        
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @include('_partials.header')
        @yield('body')
        <footer class="bg-black text-white py-5">
            <div class="container mx-auto flex items-center">
                <div class="text-center md:text-left w-full md:w-2/3">Todos los derechos reservados PowerTugger 2023</div>
                <div class="flex justify-center md:justify-end w-full md:w-1/3 space-x-5 text-2xl">
                    <a class="hover:text-amber-400 transition" href="https://www.facebook.com/powertugger/">
                        <i class="lni lni-facebook-fill"></i>
                    </a>
                    <a class="hover:text-amber-400 transition" href="https://www.instagram.com/powertugger/">
                        <i class="lni lni-instagram-original"></i>
                    </a>
                </div>
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            // Your custom options
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
      </script>
    </body>
</html>
