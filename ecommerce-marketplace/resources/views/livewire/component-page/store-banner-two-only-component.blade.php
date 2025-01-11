<section class="offer pt-80 pb-80">
    <div class="container container-lg">
        <div class="row g-4">
            @if (count($banner) > 0)
                @foreach ($banner as $k => $v)
                    <div class="md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in" data-aos-duration="600">
                        <div
                            class="offer-card relative rounded-16 bg-main-600 overflow-hidden p-16 flex items-center gap-16 flex-wrap z-[1]">
                            <img src="{{ asset($v->seller->logo ?? 'svg/default.svg') }}"
                                alt="{{ $v->seller->logo ?? 'svg/default.svg' }}"
                                class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                            <div class="offer-card__thumb xl:block hidden"><img src="images/offer-img1.png"
                                    alt="Image">
                            </div>
                            <div class="2xl:py-[1.5rem]">
                                <div
                                    class="offer-card__logo mb-16 w-80 h-80 flex items-center justify-center bg-white rounded-[50%]">
                                    <img src="images/offer-logo.png" alt="Image">
                                </div>
                                <h4 class="text-white mb-8">$5 off your first order</h4>
                                <div class="flex items-center gap-8"><span class="text-sm text-white">Delivery by
                                        6:15am</span> <span class="text-sm text-main-two-600">expired
                                        {{ $v->time_finish }}</span></div>
                                <a href="{{ route('seller', ['seller' => $v->seller->slug]) }}"
                                    class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading font-[500] inline-flex items-center rounded-[50rem] gap-8"
                                    tabindex="0">Shop Now <span class="icon text-xl flex"><i
                                            class="ph ph-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
