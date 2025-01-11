<div class="xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
    <h6 class="mb-24">Product Reviews</h6>

    @foreach ($reviews as $k => $v)
        <div class="flex items-start gap-24 pb-44 border-b border-gray-100 mb-44">
            <img src="{{ asset($v->buyer->profile_picture ?? 'svg/default.svg') }}" alt="Image"
                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0">
            <div class="flex-grow">
                <div class="flex-between items-start gap-8">
                    <div class="">
                        <h6 class="mb-12 text-md">
                            {{ Str::limit($v->buyer->name, 20, '...') }}</h6>
                        <div class="flex items-center gap-8">
                            @for ($i = 0; $i < $v->rating; $i++)
                                <span class="text-15 font-[500] text-warning-600 flex">
                                    <i class="ph-fill ph-star"></i>
                                </span>
                            @endfor
                        </div>
                    </div>
                    <span class="text-gray-800 text-xs">{{ $v->created_at->diffForHumans() }}</span>
                </div>
                <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                <p class="text-gray-700">{{ $v->review_text }}</p>
            </div>
        </div>
    @endforeach
    <div>
        {{ $reviews->links() }}
    </div>
</div>
