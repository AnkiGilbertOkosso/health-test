<x-guest-layout>
    <!-- Form -->
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-32 mx-auto">
            <a href="/" class="flex items-center py-4">
                <img src="{{ asset('/images/logo.png') }}" class="h-9 mr-2 sm:h-9" alt="Wellbeacon Logo" />
                <span class="self-center text-xl font-black whitespace-nowrap dark:text-white">Wellbeacon</span>
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create and account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <x-label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Full Name') }}<span
                                    class="text-rose-500">*</span></x-label>
                            <input type="type" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John Doe" autofocus autocomplete="name" :value="old('name')" required>
                        </div>
                        <div>
                            <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="email">{{ __('Email Address') }} <span class="text-rose-500">*</span></x-label>
                            <x-input id="email" type="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@email.com" :value="old('email')" required />
                        </div>
                        <div>
                            <x-label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                value="{{ __('Password') }}" />
                            <x-input id="password" type="password" name="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required autocomplete="new-password" />
                        </div>
                        <div>
                            <x-label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required autocomplete="new-password" />
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-purple-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-purple-600 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <x-label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept
                                    the
                                    <a class="font-medium text-purple-600 hover:underline dark:text-purple-500"
                                        href="#">Terms and Conditions</a></x-label>
                            </div>
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-6">
                                <label class="flex items-start">
                                    <input type="checkbox" class="form-checkbox mt-1" name="terms"
                                        id="terms" />
                                    <span class="text-sm ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="text-sm underline hover:no-underline">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="text-sm underline hover:no-underline">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </span>
                                </label>
                            </div>
                        @endif
                        <x-button
                            class="w-full text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                            {{ __('Sign Up') }}
                        </x-button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            {{ __('Already have an account?') }} <a href="{{ route('login') }}"
                                class="font-medium text-purple-600 hover:underline dark:text-purple-500">{{ __('Sign In') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    <x-validation-errors class="mt-4" />
    </section>
    <!-- Footer -->
</x-guest-layout>
