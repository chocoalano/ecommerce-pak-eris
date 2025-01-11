<section class="cart py-80">
    <div class="container container-lg">
        <div class="row g-4">
            <div class="2xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-8/12">
                <div class="cart-table border border-gray-100 rounded-8 px-40 py-48">
                    <div class="overflow-x-auto scroll-sm scroll-sm-horizontal">
                        <table class="table style-three">
                            <thead>
                                <tr>
                                    <th class="h6 mb-0 text-lg font-[700]">Delete</th>
                                    <th class="h6 mb-0 text-lg font-[700]">Product Name</th>
                                    <th class="h6 mb-0 text-lg font-[700]">Price</th>
                                    <th class="h6 mb-0 text-lg font-[700]">Quantity</th>
                                    <th class="h6 mb-0 text-lg font-[700]">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($cart)
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($cart as $k => $v)
                                        <tr>
                                            <td>
                                                <button type="button"
                                                    class="remove-tr-btn flex items-center gap-12 hover-text-danger-600">
                                                    <i class="ph ph-x-circle text-2xl flex"></i>
                                                    Remove
                                                </button>
                                            </td>
                                            <td class="">
                                                <input type="hidden"
                                                    wire:model="form.{{ $i }}.province_store">
                                                <input type="hidden" wire:model="form.{{ $i }}.city_store">
                                                <input type="hidden" wire:model="form.{{ $i }}.weight">
                                                <div class="table-product flex items-center gap-24">
                                                    <a href="{{ route('catalog.detail', ['slug' => $v->product->slug]) }}"
                                                        class="h-3/6 w-2/4 max-h-14 max-w-14 border border-gray-100 rounded-8 flex items-center justify-center">
                                                        <img src="{{ asset($v->product->primary_image ? 'storage/' . $v->product->primary_image : 'svg/default.svg') }}"
                                                            alt="Image">
                                                    </a>
                                                    <div class="table-product__content text-start">
                                                        <h6 class="title text-lg font-[600] mb-8">
                                                            <a href="{{ route('catalog.detail', ['slug' => $v->product->slug]) }}"
                                                                class="link text-line-2" tabindex="0">
                                                                {{ Str::limit($v->product->name, 20, '...') }}
                                                            </a>
                                                        </h6>
                                                        <div class="flex items-center gap-16 mb-16 mt-5">
                                                            <div class="flex items-center gap-6">
                                                                <span class="text-md font-[500] text-warning-600 flex">
                                                                    <i class="ph-fill ph-star"></i>
                                                                </span>
                                                                <span
                                                                    class="text-md font-[600] text-gray-900">{{ round($v->product->rating, 1) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-lg h6 mb-0 font-[600]">Rp.
                                                    {{ number_format($v->product->price, 2) }}</span></td>
                                            <td>
                                                <div class="flex rounded-4 overflow-hidden">
                                                    <button type="button"
                                                        class="quantity__minus border border-r border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex items-center justify-center hover-bg-main-600 hover-text-white">
                                                        <i class="ph ph-minus"></i>
                                                    </button>
                                                    <input type="number"
                                                        class="quantity__input flex-grow border border-gray-100 border-l-0 border-r-0 text-center w-32 px-4"
                                                        value="1" min="1" max="{{ $v->product->stock }}"
                                                        wire:model.lazy="form.{{ $i }}.qty"
                                                        wire:change="handleqty({{ $i }}, $event.target.value)">
                                                    <button type="button"
                                                        class="quantity__plus border border-r border-gray-100 flex-shrink-0 h-48 w-48 text-neutral-600 flex items-center justify-center hover-bg-main-600 hover-text-white">
                                                        <i class="ph ph-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-lg h6 mb-0 font-[600]">Rp.
                                                    {{ number_format($form[$i]['total'], 2) }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div>
                                                    <span class="text-base font-normal text-gray-600">
                                                        Store :
                                                        {{ Str::limit($v->product->seller->store_name, 20, '...') }}
                                                    </span>
                                                    <span class="text-base font-normal text-gray-600">
                                                        Location:
                                                        {{ Str::limit(optional($v->product->seller)->province . ', ' . optional($v->product->seller)->city, 20, '...') }}
                                                    </span>
                                                </div>
                                                <div class="flex flex-row gap-8 justify-between">
                                                    @if ($ongkirsetup['province'])
                                                        @php
                                                            $provinceOptions = [];
                                                            foreach ($ongkirsetup['province'] as $key => $value) {
                                                                array_push($provinceOptions, [
                                                                    'label' => $value['province'],
                                                                    'value' => $value['province_id'],
                                                                ]);
                                                            }
                                                        @endphp
                                                        <x-select name="form.{{ $i }}.province_shipping"
                                                            label="" required="true" :options="$provinceOptions"
                                                            wire:change="loadCity($event.target.value)"
                                                            wire:model="form.{{ $i }}.province_shipping" />
                                                    @endif
                                                    @if ($ongkirsetup['city'])
                                                        @php
                                                            $options = [];
                                                            foreach ($ongkirsetup['city'] as $key => $value) {
                                                                array_push($options, [
                                                                    'label' => $value['city_name'],
                                                                    'value' => $value['city_id'],
                                                                ]);
                                                            }
                                                        @endphp
                                                        <x-select name="form.{{ $i }}.city_shipping"
                                                            label="" required="true" :options="$options"
                                                            wire:model="form.{{ $i }}.city_shipping" />
                                                    @endif
                                                    @php
                                                        $kurir = ['jnt', 'jne', 'pos'];
                                                        $options_kurir = array_map(
                                                            fn($value) => [
                                                                'label' => ucfirst($value),
                                                                'value' => $value,
                                                            ],
                                                            $kurir,
                                                        );
                                                    @endphp
                                                    <x-select name="selected_courier" label="" required="true"
                                                        :options="$options_kurir"
                                                        wire:change="loadOngkir($event.target.value, {{ $i }})"
                                                        wire:model="form.{{ $i }}.courier_shipping" />

                                                    <div class="item-center">
                                                        <span class="text-lg h6 mb-0 font-[600] mt-40">Rp.
                                                            {{ number_format($form[$i]['cost_shipping'], 2) }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @if ($form[$i]['list_shipping_option'])
                                            <tr>
                                                <td colspan="5">
                                                    <fieldset class="grid grid-cols-4 gap-4 px-10">
                                                        <legend class="sr-only">Delivery</legend>
                                                        @foreach ($form[$i]['list_shipping_option'] as $k)
                                                            <div>
                                                                <label for="{{ Str::slug($k['service']) }}-form.{{ $i }}.packet_shipping"
                                                                    class="block cursor-pointer rounded-lg border border-gray-100 bg-white p-4 text-sm font-medium shadow-sm hover:border-gray-200 has-[:checked]:border-green-500 has-[:checked]:ring-1 has-[:checked]:ring-greborder-green-500">
                                                                    <div class="p-10">
                                                                        <p class="text-gray-700 font-bold text-lg">
                                                                            {{ $k['service'] }}
                                                                        </p>
                                                                        <p class="mt-1 text-gray-900">
                                                                            {{ $k['cost'][0]['etd'] }}</p>
                                                                        <p class="mt-1 text-gray-900 font-bold text-lg">
                                                                            Rp.
                                                                            {{ number_format($k['cost'][0]['value'], 2) }}
                                                                        </p>
                                                                    </div>

                                                                    <input type="radio"
                                                                        name="form.{{ $i }}.packet_shipping"
                                                                        value="{{ $k['cost'][0]['value'] }}-{{ Str::slug($k['service']) }}"
                                                                        id="{{ Str::slug($k['service']) }}-form.{{ $i }}.packet_shipping"
                                                                        class="sr-only"
                                                                        wire:model.lazy="form.{{ $i }}.packet_shipping"
                                                                        wire:click="selectOngkir({{ $i }}, $event.target.value)" />
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </fieldset>
                                                </td>
                                            </tr>
                                        @endif
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <td>
                                            <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4">
                                                <strong class="block font-medium text-red-800"> You not have product on
                                                    this cart
                                                </strong>

                                                <p class="mt-2 text-sm text-red-700">
                                                    Please select the product you want in the product catalog first!
                                                </p>
                                            </div>

                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    @if ($cart)
                        <div class="flex-between flex-wrap gap-16 mt-16">
                            {{ $cart->links('pagination.custom-pagination') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12">
                <div class="cart-sidebar border border-gray-100 rounded-8 px-24 py-40">
                    <h6 class="text-xl mb-32">Cart Totals</h6>
                    <div class="bg-color-three rounded-8 p-24">
                        <div class="mb-32 flex-between gap-8">
                            <span class="text-gray-900 font-heading-two">Subtotal</span>
                            <span class="text-gray-900 font-[600]">Rp. {{ number_format($subTotal, 2) }}</span>
                        </div>
                        <div class="mb-0 flex-between gap-8">
                            <span class="text-gray-900 font-heading-two">Delivery Price</span>
                            <span class="text-gray-900 font-[600]">Rp. {{ number_format($ongkir, 2) }}</span>
                        </div>
                        <div class="mb-0 flex-between gap-8">
                            <span class="text-gray-900 font-heading-two">Extimated Taxs</span>
                            <span class="text-gray-900 font-[600]">Rp. {{ number_format($taxTotal, 2) }}</span>
                        </div>
                    </div>
                    <div class="bg-color-three rounded-8 p-24 mt-24">
                        <div class="flex-between gap-8"><span class="text-gray-900 text-xl font-[600]">Total</span>
                            <span class="text-gray-900 text-xl font-[600]">Rp.
                                {{ number_format($grandTotal, 2) }}</span>
                        </div>
                    </div>
                    <button class="btn btn-main mt-40 py-18 w-full rounded-8" wire:click="procesed_checkout">
                        Procesed to checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
