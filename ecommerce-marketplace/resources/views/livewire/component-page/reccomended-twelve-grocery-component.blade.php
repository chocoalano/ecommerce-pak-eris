<section class="recommended overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading flex-between flex-wrap gap-16">
            <h5 class="mb-0 wow bounceInLeft">Recommended groceries for you</h5>
            <ul class="nav common-tab nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                @if (count($reccomended_welve_grocery) > 0)
                    @foreach ($reccomended_welve_grocery as $k)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bt-tb-btn-pr {{ $btntab === "pills-$k" ? 'active' : '' }}"
                                data-target="#pills-{{ $k }}" id="pills-{{ $k }}-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-{{ $k }}" type="button"
                                role="tab" aria-controls="pills-{{ $k }}" aria-selected="true"
                                wire:click="updateBtntab('pills-{{ $k }}')">
                                {{ $k }}
                            </button>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            @foreach ($reccomended_welve_grocery as $k)
                <div class="tab-pane bt-pane-pr fade show active" id="pills-{{ $k }}" role="tabpanel"
                    aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row g-12">

                        @foreach ($products as $k => $v)
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-4/12 flex-grow-0 flex-shrink-0 basis-auto w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details.html"
                                        class="product-card__thumb flex items-center justify-center"><img
                                            src="images/product-img7.png" alt="Image"></a>
                                    <div class="product-card__content p-sm-2 w-full">
                                        <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details.html"
                                                class="link text-line-2">{{ Str::limit($v->name, 20, '...') }}</a>
                                        </h6>
                                        <div class="flex items-center gap-4"><span class="text-main-600 text-md flex"><i
                                                    class="ph-fill ph-storefront"></i></span> <span
                                                class="text-gray-500 text-xs">By
                                                {{ Str::limit($v->seller->store_name, 20, '...') }}</span></div>
                                        <div class="product-card__content mt-12">
                                            <div class="product-card__price mb-8"><span
                                                    class="text-heading text-md font-[600]">$14.99 <span
                                                        class="text-gray-500 font-normal">/Qty</span> </span><span
                                                    class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            </div>
                                            <div class="flex items-center gap-6"><span
                                                    class="text-xs font-[700] text-gray-600">4.8</span> <span
                                                    class="text-15 font-[700] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-xs font-[700] text-gray-600">(17k)</span></div><a
                                                href="cart.html"
                                                class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">Add
                                                To Cart <i class="ph ph-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
