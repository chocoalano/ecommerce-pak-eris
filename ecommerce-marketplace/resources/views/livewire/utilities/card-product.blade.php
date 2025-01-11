@php
    $limit_string = 20;
@endphp
<div class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
    <a href="product-details.html"
        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative">
        <img src="{{ asset($product['image'] ?? 'svg/default.svg') }}" alt="Image" class="!w-auto max-w-[unset]">
    </a>
    <div class="product-card__content mt-16">
        <h6 class="title text-lg font-[600] mt-12 mb-8">
            <a href="product-details.html" class="link text-line-2" tabindex="0">
                {{ Str::limit($product['name'], $limit_string, '...') }}
            </a>
        </h6>
        <div class="flex items-center mb-20 mt-16 gap-6">
            <span class="text-xs font-[500] text-gray-500">{{ $product['rating'] }}</span>
            <span class="text-15 font-[500] text-warning-600 flex">
                <i class="ph-fill ph-star"></i>
            </span>
        </div>
        <div class="product-card__price my-20">
            <span class="text-heading text-md font-[600]">
                Rp. {{ number_format($product['price'], 2) }}
                <span class="text-gray-500 font-normal">
                    /Qty
                </span>
            </span>
        </div>
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
        <div class="flex flex-row gap-x-3 mt-12">
            <button wire:click="add_cart('{{ $product['id'] }}')"
                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                tabindex="0">
                Cart
                <i class="ph ph-shopping-cart"></i>
            </button>
            <a href="{{ route('catalog.detail', ['slug' => $product['slug']]) }}"
                class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                tabindex="0">
                Detail
            </a>
        </div>
    </div>
</div>
