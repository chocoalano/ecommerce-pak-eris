<section class="promotional-banner pt-80" id="featureSection">
    @if ($promo)
        <div class="container container-lg">
            <div class="row g-4">
                @foreach ($promo as $k => $v)
                    <div class="2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12 wow bounceIn"
                        data-aos="fade-up" data-aos-duration="400">
                        <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                            @if (!empty($v->seller->logo) && isset($v->seller->logo))
                                <img src="{{ asset($v->seller->logo) }}" alt="{{ $v->seller->logo }}"
                                    class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-cover z-[-1]">
                            @else
                                <img src="{{ asset('svg/default.svg') }}" alt="Default Image"
                                    class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-cover z-[-1]">
                            @endif

                            <div class="promotional-banner-item__content">
                                <h6 class="promotional-banner-item__title text-32">
                                    {{ Str::limit($v->seller->name, 13, '...') }}
                                </h6>
                                <a href="shop.html"
                                    class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                    Shop Now
                                    <span class="icon text-xl flex">
                                        <i class="ph ph-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</section>
