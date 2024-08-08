<div>
    <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">Have a project in mind?</p>
    <p class="mt-2 text-xl text-slate-700 dark:text-white">{{ __("Let's bring your next idea to reality.") }}</p>
    <p class="mt-2 text-slate-700 dark:text-slate-400">{{ __("Drop here your inquiry to kickstart the conversation. Don't worry - you will never ever receive spam from me.") }}</p>
    <div class="mt-6">

        @if ($showSuccessMessage)
            <div class="bg-emerald-100 dark:bg-emerald-500/30 px-4 py-3 border border-emerald-400 text-emerald-700 dark:text-emerald-50">
                {{ __("Thank you for reaching out. I've received your inquiry and will get back to you as soon as I can.") }}
            </div>
        @endif

        <form wire:submit.prevent="save" wire:recaptcha>
            @csrf
            <input id="name" type="text" wire:model="name" class="block w-full mt-6 border border-slate-300 dark:border-slate-500 bg-white dark:bg-slate-700 placeholder:text-slate-700 dark:placeholder:text-slate-400 text-slate-700 dark:text-slate-100 focus:border-emerald-400 focus:ring-0 outline-none px-4 py-3" placeholder="{{ __("Your name") }}" />
            <x-input-error for="name" />
            <input id="email" type="email" wire:model="email" class="block w-full mt-6 border border-slate-300 dark:border-slate-500 bg-white dark:bg-slate-700 placeholder:text-slate-700 dark:placeholder:text-slate-400 text-slate-700 dark:text-slate-100 focus:border-emerald-400 focus:ring-0 outline-none px-4 py-3" placeholder="{{ __("Your email") }}" />
            <x-input-error for="email" />
            <textarea id="question" wire:model="question" class="block w-full mt-6 border border-slate-300 dark:border-slate-500 bg-white dark:bg-slate-700 placeholder:text-slate-700 dark:placeholder:text-slate-400 text-slate-700 dark:text-slate-100 focus:border-emerald-400 focus:ring-0 outline-none px-4 py-3" cols="30" rows="6" placeholder="How can I help you today?"></textarea>
            <x-input-error for="question" />

            @if($errors->has('gRecaptchaResponse'))
                <p class="text-sm text-red-600 dark:text-red-400">{{ $errors->first('gRecaptchaResponse') }}</p>
            @endif

            <button type="submit" class="mt-6 px-4 py-3 block w-full text-center bg-emerald-600 hover:bg-emerald-600/80 transition-all text-white font-medium uppercase text-sm tracking-wider">
                {{ __("Send inquiry") }}
            </button>
        </form>

        {{-- Recaptcha library --}}
        @livewireRecaptcha
    </div>
</div>
