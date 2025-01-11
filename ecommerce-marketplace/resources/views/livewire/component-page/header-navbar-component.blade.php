<header class="header bg-white border-b border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex justify-between gap-8">
            <div class="flex items-center menu-category-wrapper">
                <div class="category on-hover-item">
                    <button type="button"
                        class="category__button flex items-center gap-8 font-[500] p-16 border-r border-l border-gray-100 text-heading">
                        <span class="icon text-2xl sm:flex hidden">
                            <i class="ph ph-dots-nine"></i>
                        </span>
                        <span class="md:flex hidden">All</span>
                        Categories
                        <span class="arrow-icon text-xl flex">
                            <i class="ph ph-caret-down"></i>
                        </span>
                    </button>
                    <div
                        class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button"
                            class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex">
                            <i class="ph ph-x"></i>
                        </button>
                        <div class="logo px-16 xl:hidden block">
                            <a href="index.html" class="link">
                                <img src="images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            @foreach ($category as $k => $v)
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                        <span>{{ $v['name'] }}</span>
                                        <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            @foreach ($v['subcategory'] as $k)
                                                <li>
                                                    <a
                                                        href="{{ route('catalog', ['category' => $v['slug'], 'subcategory' => $k['slug']]) }}">{{ $k['name'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="header-menu xl:block hidden">
                    <ul class="nav-menu flex items-center">
                        @foreach ($navbar as $k => $v)
                            <li class="nav-menu__item activePage">
                                <a href="{{ $v['route'] }}" class="nav-menu__link">{{ $v['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="header-right flex items-center">
                <a href="tel:01234567890"
                    class="bg-main-600 text-white p-12 h-full hover-bg-main-800 flex items-center gap-8 text-lg xl:flex hidden">
                    <div class="flex text-32">
                        <i class="ph ph-phone-call"></i>
                    </div>
                    01- 234 567 890
                </a>
                <div class="me-16 xl:hidden block">
                    <div class="flex items-center flex-wrap gap-12">
                        <button type="button" class="search-icon flex items-center xl:hidden flex gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative item-hover__text">
                                <i class="ph ph-magnifying-glass"></i>
                            </span>
                        </button>
                        <a href="cart.html" class="flex items-center gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-shopping-cart-simple"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Cart</span>
                        </a>
                    </div>
                </div>
                <button type="button" class="toggle-mobileMenu xl:hidden ms-3n text-gray-800 text-4xl flex">
                    <i class="ph ph-list"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
