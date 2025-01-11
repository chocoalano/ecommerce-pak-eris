@extends('layouts.app')

@section('content')
    <section class="vendor-two py-80">
        <div class="container container-lg">
            <div class="flex items-center justify-between flex-wrap mb-48 gap-16">
                <form action="#" class="input-group relative flex flex-wrap items-stretch w-full max-w-418"><input
                        class="form-control block w-full p-[0.375rem_0.75rem] text-base leading-6 text-[#495057] bg-white bg-clip-padding border border-[#ced4da] rounded transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none common-input rounded-start-3"
                        placeholder="Searching..."> <button type="submit"
                        class="input-group relative flex flex-wrap items-center w-full-text border-0 bg-main-600 !rounded-tr-[0.5rem] !rounded-br-[0.5rem] text-white text-2xl hover-bg-main-700 px-24"><i
                            class="ph ph-magnifying-glass"></i></button></form>
                <div class="flex items-center justify-between md:justify-end gap-16 flex-grow">
                    <div class="text-gray-600 text-md flex-shrink-0"><span class="text-neutral-900 font-[600]">52</span>
                        Results Found</div>
                    <div class="flex items-center gap-8 md:flex hidden"><button type="button"
                            class="grid-btn text-2xl flex w-48 h-48 border border-neutral-100 rounded-8 justify-center items-center border-main-600 text-white bg-main-600"><i
                                class="ph ph-squares-four"></i></button> <button type="button"
                            class="list-btn text-2xl flex w-48 h-48 border border-neutral-100 rounded-8 justify-center items-center"><i
                                class="ph ph-list-bullets"></i></button></div><button type="button"
                        class="w-48 h-48 xl:hidden flex flex items-center justify-center border border-gray-100 rounded-6 text-2xl sidebar-btn"><i
                            class="ph-bold ph-funnel"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="shop-sidebar"><button type="button"
                            class="shop-sidebar__close xl:hidden flex w-32 h-32 flex items-center justify-center border border-gray-100 rounded-[50%] hover-bg-main-600 absolute right-0 mr-[10px] mt-8 hover-text-white hover-border-main-600"><i
                                class="ph ph-x"></i></button>
                        <div class="flex flex-col gap-12 px-lg-0 px-3 py-lg-0 py-4">
                            <div class="border border-gray-50 rounded-8 p-24">
                                <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">Product Category</h6>
                                <ul class="max-h-540 overflow-y-auto scroll-sm">
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Mobile &amp; Accessories (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Laptop (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Electronics (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Smart Watch (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Storage (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Portable Devices (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Action Camera (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Smart Gadget (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Monitor (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Smart TV (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Camera (12)</a></li>
                                    <li class="mb-24"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Monitor Stand (12)</a></li>
                                    <li class="mb-0"><a href="product-details-two.html"
                                            class="text-gray-900 hover-text-main-600">Headphone (12)</a></li>
                                </ul>
                            </div>
                            <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                                <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">Filter by Rating</h6>
                                <div class="flex items-center gap-8 relative mb-20"><label
                                        class="absolute w-full h-full cursor-pointer" for="rating5"></label>
                                    <div class="common-check common-radio !mb-0"><input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="rating5"></div>
                                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:70%"></div>
                                    </div>
                                    <div class="flex items-center gap-4"><span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-gray-900 flex-shrink-0">124</span>
                                </div>
                                <div class="flex items-center gap-8 relative mb-20"><label
                                        class="absolute w-full h-full cursor-pointer" for="rating4"></label>
                                    <div class="common-check common-radio !mb-0"><input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="rating4"></div>
                                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:50%"></div>
                                    </div>
                                    <div class="flex items-center gap-4"><span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-gray-900 flex-shrink-0">52</span>
                                </div>
                                <div class="flex items-center gap-8 relative mb-20"><label
                                        class="absolute w-full h-full cursor-pointer" for="rating3"></label>
                                    <div class="common-check common-radio !mb-0"><input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="rating3"></div>
                                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:35%"></div>
                                    </div>
                                    <div class="flex items-center gap-4"><span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-gray-900 flex-shrink-0">12</span>
                                </div>
                                <div class="flex items-center gap-8 relative mb-20"><label
                                        class="absolute w-full h-full cursor-pointer" for="rating2"></label>
                                    <div class="common-check common-radio !mb-0"><input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="rating2"></div>
                                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="20" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:20%"></div>
                                    </div>
                                    <div class="flex items-center gap-4"><span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-gray-900 flex-shrink-0">5</span>
                                </div>
                                <div class="flex items-center gap-8 relative mb-0"><label
                                        class="absolute w-full h-full cursor-pointer" for="rating1"></label>
                                    <div class="common-check common-radio !mb-0"><input class="form-check-input"
                                            type="radio" name="flexRadioDefault" id="rating1"></div>
                                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="5" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:5%"></div>
                                    </div>
                                    <div class="flex items-center gap-4"><span
                                            class="text-xs font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-xs font-[500] text-gray-400 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-gray-900 flex-shrink-0">2</span>
                                </div>
                            </div>
                            <div class="border border-gray-50 rounded-8 p-24">
                                <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">Filter by Location</h6>
                                <div class="flex flex-col gap-8"><select class="common-input form-select">
                                        <option value="" selected="selected" disabled="disabled">Country</option>
                                        <option value="">Bangladesh</option>
                                        <option value="">Pakistan</option>
                                        <option value="">Vutan</option>
                                        <option value="">Nepal</option>
                                    </select> <select class="common-input form-select">
                                        <option value="" selected="selected" disabled="disabled">State</option>
                                        <option value="">California</option>
                                        <option value="">Washington</option>
                                        <option value="">Florida</option>
                                        <option value="">Texas</option>
                                    </select> <select class="common-input form-select">
                                        <option value="" selected="selected" disabled="disabled">City</option>
                                        <option value="">New York</option>
                                        <option value="">San Francisco</option>
                                        <option value="">Oklahoma City</option>
                                        <option value="">Chicago</option>
                                    </select> <input class="common-input" placeholder="Zip"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="2xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-8/12">
                    <div class="list-grid-wrapper vendors-two-item-wrapper grid-columns-3">
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img1.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon1.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-color-one-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">e-Mart Shop</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img2.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon2.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">Baishakhi</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img3.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon3.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">e-zone Shop</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img4.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon1.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">Cloth &amp; Fashion Shop</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img5.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon5.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">New Market Shop</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img6.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon6.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">Zeilla Shop</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img7.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon7.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">Ever Green Shop</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img8.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon8.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">Maple Shop</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                        <div
                            class="vendors-two-item rounded-12 overflow-hidden bg-color-three border border-neutral-50 hover-border-main-600 transition-2">
                            <div class="vendors-two-item__top bg-overlay style-two relative">
                                <div class="vendors-two-item__thumbs h-210"><img src="images/vendors-two-img9.png"
                                        alt="Image" class="cover-img"></div>
                                <div
                                    class="absolute top-0 inset-inline-start-0 w-full h-full p-24 z-[1] flex flex-col justify-between">
                                    <div class="flex items-center justify-between"><span
                                            class="w-80 h-80 flex items-center justify-center bg-white rounded-[50%] flex-shrink-0"><img
                                                src="images/vendors-two-icon2.png" alt="Image"> </span><button
                                            type="button"
                                            class="text-uppercase border border-white px-16 py-8 rounded-[50rem] text-white text-sm hover-bg-main-600 hover-text-white hover-border-main-600 transition-2">FOLLOW</button>
                                    </div>
                                    <div class="mt-16">
                                        <h6 class="text-white font-[600] mb-12"><a href="vendor-two-details.html"
                                                class="">New Mart</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-white">4.8</span> <span
                                                class="text-xs font-[500] text-white">(12K)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vendors-two-item__content p-24 flex-grow">
                                <div class="flex flex-col gap-14">
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-map-pin-line"></i></span>
                                        <p class="text-md text-gray-900">6391 Elgin St. Celina, Delaware 10299</p>
                                    </div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-envelope-simple"></i> </span><a href="mailto:info@watch.com"
                                            class="text-md text-gray-900 hover-text-main-60">info@watch.com</a></div>
                                    <div class="flex items-center gap-8"><span
                                            class="flex items-center justify-center text-main-600 text-2xl flex-shrink-0"><i
                                                class="ph ph-phone"></i> </span><a href="tel:0833081888"
                                            class="text-md text-gray-900 hover-text-main-60">083 308 1888</a></div>
                                </div><a href="vendor-two-details.html"
                                    class="btn bg-neutral-600 hover-bg-neutral-700 text-white py-12 px-24 rounded-8 flex items-center justify-center gap-8 font-[500] mt-24">Visit
                                    Store <span class="text-xl flex text-main-600"><i
                                            class="ph ph-storefront"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination flex items-center justify-center flex-wrap gap-16">
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html"><i class="ph-bold ph-arrow-left"></i></a></li>
                        <li class="page-item active"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html">01</a></li>
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html">02</a></li>
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html">03</a></li>
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html">04</a></li>
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html">05</a></li>
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html">06</a></li>
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html">07</a></li>
                        <li class="page-item"><a
                                class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                href="index.html"><i class="ph-bold ph-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
