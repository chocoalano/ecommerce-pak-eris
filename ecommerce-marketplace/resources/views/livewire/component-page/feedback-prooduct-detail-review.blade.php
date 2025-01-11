<div class="xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
    <div class="ms-xxl-5">
        <h6 class="mb-24">Customers Feedback</h6>
        <div class="flex flex-wrap gap-44">
            <div
                class="border border-gray-100 rounded-8 px-40 py-52 flex items-center justify-center flex-col flex-shrink-0 text-center">
                <h2 class="mb-6 text-main-600">{{ round($average, 1) }}</h2>
                <div class="flex items-center justify-center gap-8">
                    @for ($i = 0; $i < round($average); $i++)
                        <span class="text-15 font-[500] text-warning-600 flex">
                            <i class="ph-fill ph-star"></i>
                        </span>
                    @endfor
                </div>
                <span class="mt-16 text-gray-500">Average Product Rating</span>
            </div>
            <div class="border border-gray-100 rounded-8 px-24 py-40 flex-grow">
                <div class="flex items-center gap-8 mb-20"><span class="text-gray-900 flex-shrink-0">5</span>
                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                        aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:70%">
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        @for ($i = 0; $i < 5; $i++)
                            <span class="text-xs font-[500] text-warning-600 flex">
                                <i class="ph-fill ph-star"></i>
                            </span>
                        @endfor
                    </div><span class="text-gray-900 flex-shrink-0">{{ $stars_5 }}</span>
                </div>
                <div class="flex items-center gap-8 mb-20"><span class="text-gray-900 flex-shrink-0">4</span>
                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                        aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:50%">
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        @for ($i = 0; $i < 4; $i++)
                            <span class="text-xs font-[500] text-warning-600 flex">
                                <i class="ph-fill ph-star"></i>
                            </span>
                        @endfor
                    </div>
                    <span class="text-gray-900 flex-shrink-0">{{ $stars_4 }}</span>
                </div>
                <div class="flex items-center gap-8 mb-20"><span class="text-gray-900 flex-shrink-0">3</span>
                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:35%"></div>
                    </div>
                    <div class="flex items-center gap-4">
                        @for ($i = 0; $i < 3; $i++)
                            <span class="text-xs font-[500] text-warning-600 flex">
                                <i class="ph-fill ph-star"></i>
                            </span>
                        @endfor
                    </div>
                    <span class="text-gray-900 flex-shrink-0">{{ $stars_3 }}</span>
                </div>
                <div class="flex items-center gap-8 mb-20"><span class="text-gray-900 flex-shrink-0">2</span>
                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                        aria-label="Basic example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:20%"></div>
                    </div>
                    <div class="flex items-center gap-4">
                        @for ($i = 0; $i < 2; $i++)
                            <span class="text-xs font-[500] text-warning-600 flex">
                                <i class="ph-fill ph-star"></i>
                            </span>
                        @endfor
                    </div>
                    <span class="text-gray-900 flex-shrink-0">{{ $stars_2 }}</span>
                </div>
                <div class="flex items-center gap-8 mb-0"><span class="text-gray-900 flex-shrink-0">1</span>
                    <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                        aria-label="Basic example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-main-600 rounded-[50rem]" style="width:5%"></div>
                    </div>
                    <div class="flex items-center gap-4">
                        @for ($i = 0; $i < 1; $i++)
                            <span class="text-xs font-[500] text-warning-600 flex">
                                <i class="ph-fill ph-star"></i>
                            </span>
                        @endfor
                    </div>
                    <span class="text-gray-900 flex-shrink-0">{{ $stars_1 }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
