<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Registrasi User') }}
            </h2>
        </x-slot>

        <form method="POST" action="{{ url('userStore') }}">
                @csrf

                <!-- Username -->
                <div class="mt-4">
                    <x-input-label for="username" :value="__('Username')" />

                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />

                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Full Name -->
                <div class="mt-4">
                    <x-input-label for="fullname" :value="__('Full Name')" />

                    <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />

                    <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

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

                <!-- Alamat -->
                <div class="mt-4">
                    <x-input-label for="address" :value="__('Alamat')" />

                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />

                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- Birth Date -->
                <div class="mt-4">
                <x-input-label for="birthdate" :value="__('Birth Date')" />

                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus />

                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div class="mt-4">
                    <x-input-label for="phonenumber" :value="__('Phone Number')" />

                    <x-text-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required autofocus />

                    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                </div>


                <!-- Submit -->
                <x-primary-button class="mt-4">
                        {{ __('Submit') }}
                </x-primary-button>
                <!-- Reset -->
                <x-primary-button class="mt-4">
                        {{ __('Reset') }}
                </x-primary-button>
            </form>
        </div>
    </div>
    
</x-app-layout>