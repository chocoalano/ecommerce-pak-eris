<div class="header-top bg-main-600 flex-between">
    <div class="container container-lg">
        <div class="flex-between flex-wrap gap-8">
            <ul class="flex items-center flex-wrap hidden lg:flex">
                @foreach ($header_right as $k => $v)
                    <li class="border-right-item">
                        <a href="{{ $v['url'] }}"
                            class="text-white text-sm hover-text-decoration-underline">{{ $v['label'] }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="header-top__right flex items-center flex-wrap">
                @foreach ($header_left as $k => $v)
                    <li class="border-right-item">
                        <a href="{{ $v['url'] }}" class="text-white text-sm py-8 flex items-center gap-6">
                            <span class="hover-text-decoration-underline">{{ $v['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
