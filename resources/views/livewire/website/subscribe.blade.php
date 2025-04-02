<div>
    <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">{{ __("Now, if you want to be in the loop...") }}</p>
    <p class="mt-2 text-zinc-100 dark:text-zinc-300">{{ __("Enter your email below, and I'll keep you updated on projects you may be interested in.") }}</p>
    <div class="mt-6">

        @if ($showSuccessMessage)
            <div class="bg-emerald-100 dark:bg-emerald-500/30 px-4 py-3 border border-emerald-400 text-emerald-700 dark:text-emerald-50">
                {{ __("Thank you for subscribing!") }}
            </div>
        @endif

        <form wire:submit="save" wire:recaptcha>
            @csrf
            <div class="mt-6 flex items-center justify-center gap-4">
                {{-- <input  class="border border-zinc-300 dark:border-zinc-500 bg-white dark:bg-zinc-700 placeholder:text-zinc-700 dark:placeholder:text-zinc-400 text-zinc-700 dark:text-zinc-100 focus:border-emerald-400 focus:ring-0 outline-hidden px-4 py-3 text-sm" placeholder="{{ __("Your email") }}" /> --}}
                <x-input id="email" type="email" wire:model="email" class="text-zinc-900" />
                <x-button type="submit" wire:loading.attr="disabled" wire:target="save" class="px-4 py-3 inline-block text-center bg-emerald-600 disabled:bg-amber-600 hover:bg-emerald-600/80 disabled:hover:bg-amber-600/80 transition-all text-white font-medium uppercase text-sm tracking-wider">
                    <span wire:loading.remove wire:target="save">{{ __("Signup") }}</span>
                    <span wire:loading wire:target="save">{{ __("Working...") }}</span>
                </x-button>
            </div>
            <x-input-error for="email" />
        </form>

        @if($errors->has('gRecaptchaResponse'))
            <p class="text-sm text-red-600 dark:text-red-400">{{ $errors->first('gRecaptchaResponse') }}</p>
        @endif

        {{-- Recaptcha library --}}
        @livewireRecaptcha
    </div>
</div>
