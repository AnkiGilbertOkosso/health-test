<x-guest-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
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
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <x-label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                value="{{ __('Email') }}" />
                            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@email.com" />
                        </div>
                        <div>
                            <x-label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                value="{{ __('Password') }}" />
                            <x-input id="password" type="password" name="password" required placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                autocomplete="current-password" />
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-purple-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-purple-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-sm font-medium text-purple-600 hover:underline dark:text-purple-500">{{ __('Forgot Password?') }}</a>
                            @endif
                        </div>
                        <x-button type="submit"
                            class="w-full text-white bg-gradient-to-r from-purple-700 to-purple-800 hover:to-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">{{ __('Sign in') }}</x-button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            {{ __('Don\'t you have an account?') }} <a href="{{ route('register') }}"
                                class="font-medium text-purple-600 hover:underline dark:text-purple-500">{{ __('Sign Up') }}</a>
                        </p>
                        <div class="mt-5">
                            <div
                                class="bg-amber-100 dark:bg-amber-400/30 text-amber-600 dark:text-amber-400 px-3 py-2 rounded">
                                <svg class="inline w-3 h-3 shrink-0 fill-current" viewBox="0 0 12 12">
                                    <path
                                        d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                                </svg>
                                <span class="text-sm">
                                    To get you like our web all features are free
                                </span>
                            </div>
                        </div>
                    </form>
                    <x-validation-errors class="mt-4" />
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
