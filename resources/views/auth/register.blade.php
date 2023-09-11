<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="text-center font-bold uppercase text-4xl my-4 text-titulo">Registrar usuario</h1>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre:')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         <!-- Last name -->
         <div>
            <x-input-label for="lastname_p" :value="__('Apellido Paterno:')" />
            <x-text-input id="lastname_p" class="block mt-1 w-full" type="text" name="lastname_p" :value="old('lastname_p')" required autofocus />
            <x-input-error :messages="$errors->get('lastname_p')" class="mt-2" />
        </div>
        
        {{-- Last name M --}}
        <div>
            <x-input-label for="lastname_m" :value="__('Apellido Materno:')" />
            <x-text-input id="lastname_m" class="block mt-1 w-full" type="text" name="lastname_m" :value="old('lastname_m')" required autofocus />
            <x-input-error :messages="$errors->get('lastname_m')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo electronico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mb-5">  
            <input type="hidden" name="type" value="2">
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('¿Ya estas registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrarme!') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
