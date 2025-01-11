<div class="bottom-footer bg-color-one py-8">
    <div class="container container-lg">
        <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
            <!-- Footer Text -->
            <p class="bottom-footer__text wow fadeInLeftBig">
                {{ config('app.name') }} &copy; {{ now()->year }}. All Rights Reserved.
            </p>

            <!-- Payment Methods -->
            <div class="flex items-center gap-8 flex-wrap wow fadeInRightBig">
                <span class="text-heading text-sm gap-5">We Are Accepting</span>
                <img src="{{ asset('img_apps/midtrans.png') }}" class="w-50 h-40" alt="Payment Methods">
            </div>
        </div>
    </div>
</div>
