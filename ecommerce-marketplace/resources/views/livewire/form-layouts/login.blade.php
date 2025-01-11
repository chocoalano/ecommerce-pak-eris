<div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto pe-xl-5">
    <form wire:submit.prevent="submit">
        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-full">
            <h6 class="text-xl mb-32">Login</h6>
            @if (session()->has('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="bg-red-100 text-danger px-4 py-2 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif
            <x-text-input name="form.usnamail" label="Username or Email" placeholder="Enter your email or username" type="text" required="true"
                wire:model="form.usnamail" />
            <x-text-input-password name="form.password" label="Password" placeholder="Enter your password" required="true"
                wire:model="form.password" />
            <div class="flex justify-between">
                <x-checkbox name="form.remember" label="Remember me?" required="true" wire:model="form.remember" />
                <div class="mt-1">
                    <a href="{{ route('filament.seller.auth.password-reset.request') }}"
                        class="text-danger-600 text-sm font-[600] hover-text-decoration-underline">
                        Forgot your password?
                    </a>
                </div>
            </div>
            <div class="mb-24 mt-48">
                <div class="flex items-center gap-48 flex-wrap">
                    <button type="submit" class="btn btn-main py-18 px-40">
                        Log in
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
