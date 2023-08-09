<section class="bg-stone-100 py-10 md:py-20" id="products">
    <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-5 md:gap-10 px-5">
        @foreach ($products as $product)
            <div class="space-y-5">
                <h5 class="font-bold text-center">{{ $product->weight }}</h5>
                <img class="mx-auto h-44 transition transform hover:scale-105" src="{{ $product->image }}" alt="{{ $product->title }}">
                <h4 class="text-xl font-bold text-center">{{ $product->title }}</h4>
                <div class="prose prose-sm prose-stone">{!! $product->getContent() !!}</div>
            </div>
        @endforeach
    </div>
</section>