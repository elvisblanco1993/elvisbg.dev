<div>
    <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">Have a project in mind?</p>
    <p class="mt-2 text-xl text-zinc-700 dark:text-white">{{ __("Let's bring your next idea to reality.") }}</p>
    <p class="mt-2 text-zinc-700 dark:text-zinc-300">{{ __("Drop here your inquiry to kickstart the conversation. Don't worry - you will never ever receive spam from me.") }}</p>
    <div class="mt-6">

        @if ($showSuccessMessage)
            <div class="bg-emerald-100 dark:bg-emerald-500/30 px-4 py-3 border border-emerald-400 text-emerald-700 dark:text-emerald-50">
                {{ __("Thank you for reaching out. I've received your inquiry and will get back to you as soon as I can.") }}
            </div>
        @endif

        <form wire:submit="save" wire:recaptcha>
            @csrf
            <input id="name" type="text" wire:model="name" class="block w-full mt-6 border border-zinc-300 dark:border-zinc-500 bg-white dark:bg-zinc-700 placeholder:text-zinc-700 dark:placeholder:text-zinc-400 text-zinc-700 dark:text-zinc-100 focus:border-emerald-400 focus:ring-0 outline-hidden px-4 py-3" placeholder="{{ __("Your name") }}" />
            <x-input-error for="name" />
            <input id="email" type="email" wire:model="email" class="block w-full mt-6 border border-zinc-300 dark:border-zinc-500 bg-white dark:bg-zinc-700 placeholder:text-zinc-700 dark:placeholder:text-zinc-400 text-zinc-700 dark:text-zinc-100 focus:border-emerald-400 focus:ring-0 outline-hidden px-4 py-3" placeholder="{{ __("Your email") }}" />
            <x-input-error for="email" />
            <textarea id="question" wire:model="question" class="block w-full mt-6 border border-zinc-300 dark:border-zinc-500 bg-white dark:bg-zinc-700 placeholder:text-zinc-700 dark:placeholder:text-zinc-400 text-zinc-700 dark:text-zinc-100 focus:border-emerald-400 focus:ring-0 outline-hidden px-4 py-3" cols="30" rows="6" placeholder="How can I help you today?"></textarea>
            <x-input-error for="question" />

            <button type="submit" wire:loading.attr="disabled" wire:target="save" class="mt-6 px-4 py-3 block w-full text-center bg-emerald-600 disabled:bg-amber-600 hover:bg-emerald-600/80 disabled:hover:bg-amber-600/80 transition-all text-white font-medium uppercase text-sm tracking-wider">
                <span wire:loading.remove wire:target="save">{{ __("Send inquiry") }}</span>
                <span wire:loading wire:target="save">{{ __("Sending") }}</span>
            </button>
        </form>

        @if($errors->has('gRecaptchaResponse'))
            <p class="text-sm text-red-600 dark:text-red-400">{{ $errors->first('gRecaptchaResponse') }}</p>
        @endif

        {{-- Recaptcha library --}}
        @livewireRecaptcha
    </div>
</div>
