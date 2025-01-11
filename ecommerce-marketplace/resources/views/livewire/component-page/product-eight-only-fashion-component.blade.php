<div class="product mt-24">
    <div class="container container-lg">
        <div class="row g-4 g-12">
            @if (count($productEightOnly) > 0)
                @foreach ($productEightOnly as $k => $v)
                    @livewire('utilities.card-product-eight', [
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
            @endif
        </div>
    </div>
</div>
