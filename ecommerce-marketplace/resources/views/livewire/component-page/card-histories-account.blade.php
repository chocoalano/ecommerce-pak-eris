<div>
    @if (count($histories) > 0)
        @foreach ($histories as $k => $v)
            {{ dd($v) }}
            <a href="#" class="rounded-xl border border-gray-100 p-20">
                <div>
                    <div class="flex items-center gap-4">
                        <img alt="" src="{{ asset('storage/' . $v->items ?? 'svg/default.svg') }}"
                            class="size-16 object-cover" />

                        <div>
                            <div class="flex justify-between">
                                <h3 class="text-lg font-bold text-heading ml-10">
                                    {{ Str::limit(Auth::user()->name, 30, '...') }}
                                </h3>
                                <h3 class="text-lg font-bold text-heading ml-10">
                                    2 Hari yang lalu
                                </h3>
                            </div>

                            <div class="flow-root mt-10 ml-10">
                                <ul class="-m-1 flex flex-wrap">
                                    <li class="p-1 leading-none">
                                        <div class="text-xm font-medium text-gray-600 hover:text-white">
                                            Rp.1000.000,00
                                        </div>
                                    </li>
                                    <li class="p-1 leading-none">
                                        <span
                                            class="inline-flex items-center justify-center rounded-full bg-green-50 px-2.5 py-0.5 text-main-700">
                                            <div class="whitespace-nowrap text-sm">Status pembayaran</div>
                                        </span>
                                    </li>
                                    <li class="p-1 leading-none">
                                        <span
                                            class="inline-flex items-center justify-center rounded-full bg-green-50 px-2.5 py-0.5 text-main-700">
                                            <div class="whitespace-nowrap text-sm">Status pengiriman</div>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    @else
        <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-20">
            <div class="flex items-center gap-2 text-red-800">
                <strong class="block font-medium"> Information </strong>
            </div>

            <p class="mt-2 text-sm text-red-700">
                you have never made a transaction before.
            </p>
        </div>

    @endif
</div>
