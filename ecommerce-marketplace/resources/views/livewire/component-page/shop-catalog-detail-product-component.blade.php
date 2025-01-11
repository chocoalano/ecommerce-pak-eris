<div class="row g-4">
    <div class="xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto">
        <div class="row g-4">
            <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                <div class="product-details__left">
                    <div class="product-details__thumb-slider border border-gray-100 rounded-16">
                        @if (count($product_detail->images) > 0)
                            @foreach ($product_detail->images as $k => $v)
                                <div class="">
                                    <div class="product-details__thumb flex items-center justify-center h-full">
                                        <img src="{{ asset($v->image ?? 'svg/default.svg') }}" alt="{{ $v->image }}">
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 5; $i++)
                                <div class="">
                                    <div class="product-details__thumb flex items-center justify-center h-full">
                                        <img src="{{ asset('svg/default.svg') }}" alt="default.svg">
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                    <div class="mt-24">
                        <div class="product-details__images-slider">
                            @if (count($product_detail->images) > 0)
                                @foreach ($product_detail->images as $k => $v)
                                    <div>
                                        <div
                                            class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                            <img src="{{ asset($v->image ?? 'svg/default.svg') }}"
                                                alt="{{ $v->image }}">
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @for ($i = 0; $i < 5; $i++)
                                    <div>
                                        <div
                                            class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                            <img src="{{ asset('svg/default.svg') }}" alt="default.svg">
                                        </div>
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                <div class="product-details__content">
                    <h5 class="mb-12">{{ Str::limit($product_detail->name, 50, '...') }}</h5>
                    <div class="flex items-center flex-wrap gap-12">
                        <div class="flex items-center gap-12 flex-wrap">
                            <div class="flex items-center gap-8">
                                <span class="text-15 font-[500] text-warning-600 flex">
                                    <i class="ph-fill ph-star"></i>
                                </span>
                            </div><span class="text-sm font-[500] text-neutral-600">{{ $product_detail->rating }}
                                Star
                                Rating</span>
                        </div>
                    </div><span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                    <p class="text-gray-700">{{ Str::limit($product_detail->description, 100, '...') }}</p>
                    <div class="mt-32 flex items-center flex-wrap gap-32">
                        <div class="flex items-center gap-8">
                            <h4 class="mb-0">Rp. {{ number_format($product_detail->price, 2) }}</h4>
                        </div>
                    </div><span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                    <div class="mb-24">
                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                            aria-label="Basic example" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-main-two-600 rounded-[50rem] h-full" style="width:32%">
                            </div>
                        </div><span class="text-sm text-gray-700 mt-8">Available
                            only:{{ $product_detail->stock }}</span>
                    </div><span class="text-gray-900 block mb-8">Quantity:</span>
                    <div class="flex-between gap-16 flex-wrap">
                        @if (session()->has('success'))
                            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="bg-red-100 text-danger px-4 py-2 rounded mb-4">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form class="flex items-center flex-wrap gap-16" wire:submit.prevent="submit">
                            <div class="border border-gray-100 rounded-[50rem] py-9 px-16 flex items-center">
                                <button type="button"
                                    class="quantity__minus p-4 text-gray-700 hover-text-main-600 flex items-center justify-center">
                                    <i class="ph ph-minus"></i>
                                </button>
                                <input type="number" class="quantity__input border-0 text-center w-32" value="1"
                                    name="form.qty" wire:model="form.qty">
                                <button type="button"
                                    class="quantity__plus p-4 text-gray-700 hover-text-main-600 flex items-center justify-center">
                                    <i class="ph ph-plus"></i>
                                </button>
                            </div>
                            <x-textarea name="form.detail_orders" label="Be specific about the item you are ordering"
                                required="true" placeholder="" wire:model="form.detail_orders" />
                            <button type="submit"
                                class="btn btn-main rounded-[50rem] flex items-center inline-flex gap-8 px-48">
                                <i class="ph ph-shopping-cart"></i>
                                Add To Cart
                            </button>
                        </form>
                    </div>
                    @if ($product_detail->promotion_set > 0)
                        <span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                        <ul class="list-inside ms-12">
                            <li class="text-gray-900 text-sm mb-8">Buy {{ $product_detail->promotion_set }}, Get
                                {{ $product_detail->promotion_get }} FREE</li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto">
        <div
            class="product-details__sidebar product-details__sidebar-c border border-gray-100 rounded-16 overflow-hidden">
            <div class="p-24">
                <div class="flex-between bg-main-600 rounded-[50rem] p-8">
                    <div class="flex items-center gap-8">
                        <span class="w-44 h-44 bg-white rounded-[50%] flex items-center justify-center text-2xl">
                            <i class="ph ph-storefront"></i>
                        </span>
                        <span
                            class="text-white">{{ Str::limit($product_detail->seller->store_name, 10, '...') }}</span>
                    </div>
                    <a href="{{ route('seller.detail', ['slug' => $product_detail->seller->store_name]) }}"
                        class="btn btn-white rounded-[50rem] text-[#212529] text-uppercase">
                        View Store
                    </a>
                </div>
            </div>
            @php
                $seller_marketing = [
                    [
                        'icon' => 'ph-fill ph-truck',
                        'h6' => 'Fast Delivery',
                        'p' => 'Lightning-fast shipping, guaranteed.',
                    ],
                    [
                        'icon' => 'ph-fill ph-arrow-u-up-left',
                        'h6' => 'Free 90-day returns',
                        'p' => 'Shop risk-free with easy returns.',
                    ],
                    [
                        'icon' => 'ph-fill ph-check-circle',
                        'h6' => 'Pickup available at Shop location',
                        'p' => 'Usually ready in 24 hours',
                    ],
                    [
                        'icon' => 'ph-fill ph-credit-card',
                        'h6' => 'Payment',
                        'p' => 'Payment upon receipt of goods, Payment by card in the
                        department, Google Pay, Online card.',
                    ],
                ];
            @endphp
            @foreach ($seller_marketing as $k)
                <div class="p-24 bg-color-one flex items-start gap-24 border-b border-gray-100">
                    <span
                        class="w-44 h-44 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-2xl flex-shrink-0">
                        <i class="{{ $k['icon'] }}"></i>
                    </span>
                    <div class="">
                        <h6 class="text-sm mb-8">{{ $k['h6'] }}</h6>
                        <p class="text-gray-700">{{ $k['p'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
