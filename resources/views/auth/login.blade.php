<x-guest-layout>
    <div class="">
        <form method="POST" action="{{ route('login') }}" novalidate class=" px-16 py-10 shadow-sm rounded-md  w-full">
            @csrf
            <h1 class="text-center font-bold uppercase text-4xl my-4 text-titulo">Iniciar sesión</h1>
            <div class="mb-5">
                <x-input-label for="email" class="mb-2 block uppercase text-gray-400 font-bold" :value="__('Correo electronico')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-5">
                <x-input-label for="password" class="mb-2 block uppercase text-gray-400 font-bold" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-between items-center">
                <div>
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Mantener la sesión abierta') }}</span>
                    </label>
                </div>
                <div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                </div>
            </div>
    </div>
    <div class="flex items-center justify-center mt-4">
        <x-primary-button class="ml-3">
            {{ __('Iniciar sesión') }}
        </x-primary-button>
       
    </div>
    <div class="flex items-center justify-center mt-4">
        <a class="mt-4 text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('register') }}">
        {{ __('¿Aún no tienes una cuenta? Registrate ahora.') }}
    </a>

    </div>
    </form>
    </div>
</x-guest-layout>
