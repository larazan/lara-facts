<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <div class="w-full sm:max-w-lg mx-auto flex flex-col gap-4 p-4 bg-white ">
            <div class="mx-auto max-w-sm">
                <x-jet-authentication-card-logo />
            </div>        

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="justify-center inline-flex items-center px-4 py-3 bg-slate-600 dark:bg-slate-700 dark:hover:bg-slate-800 border border-transparent rounded-lg font-bold text-white dark:text-gray-200 tracking-wide hover:bg-slate-700 focus:bg-slate-700 dark:focus:bg-slate active:bg-slate-900 dark:active:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 shadow-lg shadow-slate-400/30 dark:shadow-slate-800/30 w-full ">
                        {{ __('Reset Password') }}
                    </button>
                </div>

            </form>

        </div>
    </x-jet-authentication-card>
</x-guest-layout>
