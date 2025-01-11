@extends('layouts.app')

@section('content')
    @livewire('component-page.breadscrumb-component')
    <section class="account py-80">
        <div class="container container-lg">
            @if (!Auth::check())
                <div class="row g-4">
                    @livewire('form-layouts.login')
                    @livewire('form-layouts.register')
                </div>
            @else
                <div class="row g-4">
                    <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 aos-init aos-animate"
                        data-aos="zoom-in" data-aos-duration="400">
                        <div class="rounded-xl border border-gray-100 p-40">
                            <div class="flex items-center gap-4">
                                <img alt=""
                                    src="{{ asset('storage/' . Auth::user()->profile_picture ?? 'svg/default.svg') }}"
                                    class="size-16 rounded-full object-cover" />

                                <div>
                                    <h3 class="text-lg font-bold text-heading ml-10">
                                        {{ Str::limit(Auth::user()->name, 30, '...') }}</h3>

                                    <div class="flow-root mt-12 ml-10">
                                        <ul class="-m-1 flex flex-wrap">
                                            <li class="p-1 leading-none">
                                                <span class="text-xs font-medium text-gray-600">
                                                    {{ Str::limit(Auth::user()->email, 30, '...') }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <ul class="mt-40 space-y-5">
                                @livewire('form-layouts.profile')
                            </ul>
                        </div>
                    </div>
                    <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 aos-init aos-animate"
                        data-aos="zoom-in" data-aos-duration="400">
                        @livewire('component-page.card-histories-account')
                    </div>
                </div>
            @endif
        </div>
    </section>
    @livewire('component-page.shipping-information-component')
@endsection
