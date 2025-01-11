@if ($paginator->hasPages())
    <ul class="pagination flex items-center justify-center flex-wrap gap-16">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item">
                <button
                    class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    disabled>
                    <i class="ph-bold ph-arrow-left"></i>
                </button>
            </li>
        @else
            <li class="page-item">
                <button wire:click="previousPage"
                    class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100">
                    <i class="ph-bold ph-arrow-left"></i>
                </button>
            </li>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item">
                    <span
                        class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100">
                        {{ $element }}
                    </span>
                </li>
            @endif

            @if (is_array($element))
                @php
                    $current = $paginator->currentPage();
                    $total = $paginator->lastPage();
                    $start = max(1, $current - 2); // Mulai 2 halaman sebelum halaman aktif
                    $end = min($total, $current + 2); // Akhir 2 halaman setelah halaman aktif
                @endphp

                {{-- Tombol untuk halaman awal --}}
                @if ($start > 1)
                    <li class="page-item">
                        <button wire:click="gotoPage(1)"
                            class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100">
                            1
                        </button>
                    </li>
                    @if ($start > 2)
                        <li class="page-item">
                            <span
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100">
                                ...
                            </span>
                        </li>
                    @endif
                @endif

                {{-- Tombol halaman yang ditampilkan --}}
                @for ($page = $start; $page <= $end; $page++)
                    @if ($page == $current)
                        <li class="page-item active">
                            <button wire:click="gotoPage({{ $page }})"
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100">
                                {{ $page }}
                            </button>
                        </li>
                    @else
                        <li class="page-item">
                            <button wire:click="gotoPage({{ $page }})"
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100">
                                {{ $page }}
                            </button>
                        </li>
                    @endif
                @endfor

                {{-- Tombol untuk halaman akhir --}}
                @if ($end < $total)
                    @if ($end < $total - 1)
                        <li class="page-item">
                            <span
                                class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100">
                                ...
                            </span>
                        </li>
                    @endif
                    <li class="page-item">
                        <button wire:click="gotoPage({{ $total }})"
                            class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100">
                            {{ $total }}
                        </button>
                    </li>
                @endif
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <button wire:click="nextPage"
                    class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100">
                    <i class="ph-bold ph-arrow-right"></i>
                </button>
            </li>
        @else
            <li class="page-item">
                <button
                    class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                    disabled>
                    <i class="ph-bold ph-arrow-right"></i>
                </button>
            </li>
        @endif
    </ul>
@endif
