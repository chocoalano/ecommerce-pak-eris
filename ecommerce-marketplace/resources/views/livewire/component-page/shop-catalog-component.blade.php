<div class="row">
    <div class="xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto">
        <div class="shop-sidebar">
            <button type="button"
                class="shop-sidebar__close xl:hidden flex w-32 h-32 flex items-center justify-center border border-gray-100 rounded-[50%] hover-bg-main-600 absolute right-0 mr-[10px] mt-8 hover-text-white hover-border-main-600">
                <i class="ph ph-x"></i>
            </button>
            @foreach ($categories as $k => $v)
                <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                    <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">{{ $v->name }} Category</h6>
                    <ul class="max-h-540 overflow-y-auto scroll-sm">
                        @foreach ($v->subcategory as $k => $sub)
                            <li class="mb-24">
                                <a href="#" class="text-gray-900 hover-text-main-600"
                                    wire:click="filter('{{ $v->slug }}', '{{ $sub->slug }}')">
                                    {{ $sub->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">
                    Filter by Price
                </h6>
                <div class="custom--range">
                    <div id="slider-range"></div>
                    <div class="flex-between flex-wrap-reverse gap-8 mt-24">
                        <button type="button" class="btn btn-main h-40 flex items-center">
                            Filter
                        </button>
                        <div class="custom--range__content flex items-center gap-8">
                            <span class="text-gray-500 text-md flex-shrink-0">
                                Price:
                            </span>
                            <input class="custom--range__prices text-neutral-600 text-start text-md font-[500]"
                                id="amount" readonly="readonly">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto">
        <div class="flex-between gap-16 flex-wrap mb-40">
            <span class="text-gray-900">
                Showing 1-{{ $products->perPage() }} of {{ $products->total() }} result
            </span>
            <div class="relative flex items-center gap-16 flex-wrap">
                <div class="list-grid-btns flex items-center gap-16">
                    <button type="button"
                        class="w-44 h-44 flex items-center justify-center border border-gray-100 rounded-6 text-2xl list-btn">
                        <i class="ph-bold ph-list-dashes"></i>
                    </button>
                    <button type="button"
                        class="w-44 h-44 flex items-center justify-center border border-main-600 text-white bg-main-600 rounded-6 text-2xl grid-btn">
                        <i class="ph ph-squares-four"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="list-grid-wrapper">
            @php
                $limit = 20;
            @endphp
            @foreach ($products as $k => $v)
            @livewire('utilities.card-product', [
                'product' => [
                    'id' => $v->id,
                    'slug' => $v->slug,
                    'image' => !empty($v->images) && isset($v->images[0]) ? $v->images[0]->image : null,
                    'price' => $v->price,
                    'rating' => $v->rating,
                    'name' => $v->name,
                    'store_name' => !empty($v->store) ? $v->store->store_name : null,
                    'stock' => $v->stock,
                ],
            ])
            @endforeach

        </div>
        {{ $products->links('pagination.custom-pagination') }}
    </div>
</div>
