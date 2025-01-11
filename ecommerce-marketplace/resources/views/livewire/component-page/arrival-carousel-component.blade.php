<section class="new-arrival pb-80">
    @if (count($product) > 0)
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0">New Arrivals</h5>
                    <div class="flex items-center gap-16"><a href="shop.html"
                            class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                            All Deals</a>
                        <div class="flex items-center gap-8"><button type="button" id="new-arrival-prev"
                                class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1"><i
                                    class="ph ph-caret-left"></i></button> <button type="button" id="new-arrival-next"
                                class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1"><i
                                    class="ph ph-caret-right"></i></button></div>
                    </div>
                </div>
            </div>
            <div class="new-arrival__slider arrow-style-two">
                @php
                    $i = 200;
                    $limit = 20;
                @endphp
                @foreach ($product as $k => $v)
                    <div data-aos="fade-up" data-aos-duration="{{ $i }}">
                        <div
                            class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                                <img src="{{ asset($v->images[0]->image ?? 'svg/default.svg') }}" alt="Image">
                            </a>
                            <div class="product-card__content mt-12">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[700] text-gray-500">{{ $v->rating }}</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details.html"
                                        class="link text-line-2">{{ Str::limit($v->name, $limit, '...') }}</a></h6>
                                <div class="flex items-center gap-4"><span class="text-main-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By
                                        {{ Str::limit($v->seller->store_name, $limit, '...') }}</span></div>
                                <div class="flex-between gap-8 mt-24 flex-wrap">
                                    <div class="product-card__price">
                                        <span class="text-heading text-md font-[600]">
                                            Rp.
                                            {{ number_format($v->price, 2) }}
                                            <span class="text-gray-500 font-normal">/Qty</span>
                                        </span>
                                    </div><a href="cart.html"
                                        class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">Add
                                        <i class="ph ph-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $i + 200;
                    @endphp
                @endforeach

            </div>
        </div>
    @endif
</section>
