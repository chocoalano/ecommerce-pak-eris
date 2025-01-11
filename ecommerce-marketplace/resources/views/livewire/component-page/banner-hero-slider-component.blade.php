<div class="banner">
    <div class="container container-lg">
        @if (count($banner_hero))
            <div class="banner-item rounded-24 overflow-hidden relative arrow-center">
                <a href="#featureSection"
                    class="scroll-down w-84 h-84 text-center flex items-center justify-center bg-main-600 rounded-[50%] border border-5 text-white border-white !absolute left-[50%] translate-x-[-50%] bottom-0 hover-bg-main-800">
                    <span class="icon line-height-0">
                        <i class="ph ph-caret-double-down"></i>
                    </span>
                </a>
                <img src="images/banner-bg.png" alt="Image"
                    class="banner-img absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1] object-fit-cover rounded-24">
                <div class="flex items-center">
                    <button type="button" id="banner-prev"
                        class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-left"></i>
                    </button>
                    <button type="button" id="banner-next"
                        class="slick-next slick-arrow flex items-center justify-center rounded-[50%] bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-right"></i>
                    </button>
                </div>
                <div class="banner-slider">
                    @foreach ($banner_hero as $k => $v)
                        <div class="banner-slider__item">
                            <div class="banner-slider__inner flex-between relative">
                                <div class="banner-item__content gap-10">
                                    <h1 class="banner-item__title wow bounceInDown text-base-content/90 text-4xl font-bold"
                                        data-wow-duration="1s">
                                        {{ $v->title }}
                                    </h1>
                                    <p class="banner-item__title text-base-content text-base text-lg font-semibold">
                                        {{ $v->text }}
                                    </p>
                                    <a href="{{ route('seller', ['store_name' => $v->seller->slug]) }}"
                                        class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 wow bounceInUp"
                                        data-wow-duration="1s">
                                        Explore Shop
                                        <span class="icon text-xl flex">
                                            <i class="ph ph-shopping-cart-simple"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt
                                    data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000"
                                    data-tilt-scale="1.06">
                                    @if ($v->seller->logo)
                                        <img src="{{ asset($v->seller->logo) }}" alt="Image">
                                    @else
                                        <img src="{{ asset('svg/default.svg') }}" alt="Image">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
