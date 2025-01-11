@extends('layouts.app')

@section('content')
    @livewire('component-page.breadscrumb-component')
    <section class="product-details py-80">
        <div class="container container-lg">
            @livewire('component-page.shop-catalog-detail-product-component', ['product_detail' => $product])
            <div class="pt-80">
                <div class="product-dContent border rounded-24">
                    <div class="product-dContent__header border-b border-gray-100 flex-between flex-wrap gap-16">
                        <ul class="nav common-tab nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bt-tb-btn" id="pills-description-tab"
                                    data-target="#pills-description" data-bs-toggle="pill"
                                    data-bs-target="#pills-description" type="button" role="tab"
                                    aria-controls="pills-description" aria-selected="true">
                                    Description
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bt-tb-btn active" id="pills-reviews-tab"
                                    data-target="#pills-reviews" data-bs-toggle="pill" data-bs-target="#pills-reviews"
                                    type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">
                                    Reviews
                                </button>
                            </li>
                        </ul>
                        <a href="{{ route('home') }}"
                            class="btn bg-color-one rounded-16 flex items-center gap-8 text-main-600 hover-bg-main-600 hover-text-white">
                            <img src="images/satisfaction-icon.webp" alt="Image">
                            100% Satisfaction Guaranteed
                        </a>
                    </div>
                    <div class="product-dContent__box">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show bt-tab-pane active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab" tabindex="0" style="display: none;">
                                {{ $product->description }}
                            </div>
                            <div class="tab-pane fade bt-tab-pane" id="pills-reviews" role="tabpanel"
                                aria-labelledby="pills-reviews-tab" tabindex="0" style="">
                                <div class="row g-4 mt-10">
                                    @livewire('component-page.comment-prooduct-detail-review', [
                                        'product_id' => $product->id,
                                    ])
                                    @livewire('component-page.feedback-prooduct-detail-review', [
                                        'product_id' => $product->id,
                                    ])
                                </div>
                                <div class="row g-4 mt-10">
                                    @livewire('form-layouts.form-comment-prooduct-detail-review', [
                                        'product_id' => $product->id,
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('component-page.shipping-information-component')
    @livewire('component-page.news-latter-component')
@endsection
