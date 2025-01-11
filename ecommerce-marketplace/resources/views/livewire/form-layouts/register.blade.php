<div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
    <form wire:submit.prevent="submit">
        <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40">
            <h6 class="text-xl mb-32">Register</h6>
            <x-text-input name="form.name" label="Username" placeholder="Enter your username" type="text" required="true"
                wire:model="form.name" />
            <x-text-input name="form.email" label="Email" placeholder="Enter your email" type="email" required="true"
                wire:model="form.email" />
            <x-text-input-password name="form.password" label="Password" placeholder="Enter your password" required="true"
                wire:model="form.password" />
            <x-text-input name="form.phone_number" label="Phone numbers" placeholder="Enter your phone numbers"
                type="tel" required="true" wire:model="form.phone_number" />
            <x-text-input name="form.profile_picture" label="Avatar image" placeholder="Enter your avatar image"
                type="file" required="true" wire:model="form.profile_picture" />
            <div class="my-48">
                <p class="text-gray-500">Your personal data will be used to process your order, support your
                    experience throughout this website, and for other purposes described in our <a href="index.html"
                        class="text-main-600 text-decoration-underline">privacy policy</a>
                    .</p>
            </div>
            <div class="mt-48">
                <button type="submit" class="btn btn-main py-18 px-40">Register</button>
            </div>
        </div>
    </form>
</div>
