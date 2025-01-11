<header class="header-middle bg-color-one border-b border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <div class="logo">
                <a href="index.html" class="link">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
            <div>
                <form wire:submit.prevent="submit" class="flex items-center flex-wrap form-location-wrapper">
                    <div class="search-category flex h-48 select-border-r-0 radius-end-0 search-form md:flex hidden">
                        <select class="js-example-basic-single border border-gray-200 border-r-0"
                            wire:model="category_selected">
                            <option value="" selected="selected" disabled="disabled">All Categories</option>
                            @foreach ($category as $k => $v)
                                <option value={{ $v['slug'] }}>{{ $v['name'] }}</option>
                            @endforeach
                        </select>
                        <div class="search-form__wrapper relative">
                            <input
                                class="search-form__input common-input py-13 ps-16 pe-18 !rounded-tr-[50rem] !rounded-br-[50rem] pe-44"
                                placeholder="Search for a product or brand" wire:model="search">
                            <button type="submit"
                                class="w-32 h-32 bg-main-600 rounded-[50%] flex items-center justify-center text-xl text-white absolute top-[50%] translate-y-[-50%] right-0 me-8">
                                <i class="ph ph-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>
                @error('category_selected')
                    <span class="error">{{ $message }}</span>
                @enderror
                @error('search')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="header-right items-center xl:block hidden">
                <div class="flex items-center flex-wrap gap-12">
                    <button type="button" class="search-icon flex items-center xl:hidden flex gap-4 item-hover">
                        <span class="text-2xl text-gray-700 flex relative item-hover__text">
                            <i class="ph ph-magnifying-glass"></i>
                        </span>
                    </button>
                    <a href="{{ route('cart') }}" class="flex items-center gap-4 item-hover">
                        <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                            <i class="ph ph-shopping-cart-simple"></i>
                            <span
                                class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">
                                2
                            </span>
                        </span>
                        <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Cart</span>
                    </a>
                    @if (Auth::check())
                        <a href="{{ route('account') }}" class="flex items-center gap-4 item-hover">
                            <div class="w-40 h-40 rounded-full overflow-hidden items-center justify-center">
                                <img src="{{ asset("storage/".Auth::user()->profile_picture ?? 'svg/default.svg') }}" alt="Avatar">
                            </div>
                            <span
                                class="text-md text-gray-500 item-hover__text hidden xl:flex">{{ Str::limit(Auth::user()->name, 20, '...') }}</span>
                        </a>
                    @else
                        <a href="{{ route('account') }}" class="flex items-center gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-shopping-cart-simple"></i>
                            </span>
                            <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Sign in/up</span>
                        </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</header>
