<section class="top-vendors py-80">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0">Weekly Top Grocery Sellers</h5><a href="shop.html"
                    class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">All
                    Sellers</a>
            </div>
        </div>
        <div class="row g-4 vendor-card-wrapper">
            @if (count($grocery_seller) > 0)
                @foreach ($grocery_seller as $k => $v)
                    <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        data-aos="zoom-in" data-aos-duration="200">
                        <div class="vendor-card text-center px-16 pb-24">
                            <div class=""><img src="{{ asset($v->logo ?? 'svg/default.svg') }}" alt="Image"
                                    class="vendor-card__logo m-12">
                                <h6 class="title mt-32">{{ Str::limit($v->store_name, 20, '...') }}</h6><span
                                    class="text-heading text-sm block">Open at {{ $v->store_time_opened }}</span> <a
                                    href="shop.html"
                                    class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">Close at
                                    {{ $v->store_time_opened }}</a>
                            </div>
                            <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                                @foreach ($v->products as $k => $p)
                                    @foreach ($p->images as $i => $img)
                                        <div
                                            class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                            <img src="{{ asset($img->image ?? 'svg/default.svg') }}" alt="Image">
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</section>
