@extends('layouts.app')

@section('content')
    @livewire('component-page.breadscrumb-component')
    <section class="shop py-80">
        <div class="container container-lg">
            @livewire('component-page.shop-catalog-component')
        </div>
    </section>
    @livewire('component-page.shipping-information-component')
@endsection
