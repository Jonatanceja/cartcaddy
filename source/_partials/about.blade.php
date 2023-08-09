<section class="" id="about">
    <div class="container mx-auto py-10 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20 items-center px-5">
        <div class="space-y-5">
            <x-text.subtitle_light>{{ $page->title }}</x-text.subtitle_light>
            <x-text.h2>¿Necesitas una solución ágil y eficiente para tus operaciones industriales?</x-text.h2>
            <x-text.body>¡No busques más! Con CartCaddy de Dj Products, lleva el poder de la productividad a tus manos. Nuestros remolcadores y tuggers industriales están diseñados para brindarte un transporte sin complicaciones, permitiéndote mover cargas pesadas de manera rápida y segura. Olvídate de los problemas de logística y optimiza tus procesos con Cart Caddy. ¡Descubre cómo nuestros innovadores equipos pueden transformar tu negocio hoy mismo!</x-text.body>
        </div>                
        <div class="relative">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper py-12">
                    @foreach ($products as $product)
                        <div class="swiper-slide space-y-7 text-center">
                            <p class="text font-bold text-stone-800">{{ $product->weight }}</p>
                            <div>
                                <img class="mx-auto max-h-56 md:max-h-80" src="{{ $product->image }}" alt="{{ $product->title }}">
                            </div>
                            <h3 class="text-xl font-bold text-stone-800">{{ $product->title }}</h3>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <img class="absolute top-0 right-0 h-14" src="{{ $page->logo2 }}" alt="{{ $page->title }} Logo"> 
        </div>
    </div>
</section>