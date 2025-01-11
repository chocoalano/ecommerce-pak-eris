<div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-4/12 flex-grow-0 flex-shrink-0 basis-auto w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
    data-aos="fade-up" data-aos-duration="1000">
    <div class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
            <img src="{{ asset($product['image'] ?? 'svg/default.svg') }}" alt="Image">
        </a>
        <div class="product-card__content mt-12">
            <div class="product-card__price mb-16">
                <span class="text-heading text-md font-[600]">
                    Rp. {{ number_format($product['price'], 2) }}
                    <span class="text-gray-500 font-normal">/Qty</span>
                </span>
            </div>
            <div class="flex items-center gap-6">
                <span class="text-xs font-[700] text-gray-600">{{ $product['rating'] }}</span>
                <span class="text-15 font-[700] text-warning-600 flex">
                    <i class="ph-fill ph-star"></i>
                </span>
            </div>
            <h6 class="title text-lg font-[600] mt-12 mb-8">
                <a href="product-details.html" class="link text-line-2">
                    {{ Str::limit($product['name'], 15, '...') }}
                </a>
            </h6>
            <div class="flex items-center gap-4">
                <span class="text-main-600 text-md flex">
                    <i class="ph-fill ph-storefront"></i>
                </span>
                <span class="text-gray-500 text-xs">
                    {{ Str::limit($product['store_name'] ?? 'Unknow', 25, '...') }}
                </span>
            </div>
            <div class="mt-12">
                <span class="text-gray-900 text-xs font-[500] mt-8">
                    Available: {{ $product['stock'] }}
                </span>
            </div>
        </div>
        <div class="flex flex-row gap-3 mt-12 justify-between items-center">
            <button wire:click="add_cart('{{ $product['id'] }}')"
                class="btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                Cart
                <i class="ph ph-shopping-cart"></i>
            </button>
            <a href="{{ route('catalog.detail', ['slug' => $product['slug']]) }}"
                class="bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                Detail
            </a>
        </div>
    </div>
</div>
