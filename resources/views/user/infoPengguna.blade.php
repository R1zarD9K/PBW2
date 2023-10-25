<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Info Pengguna') }}
            </h2>
        </x-slot>

        <!-- <form method="POST" action="{{ route('userStore') }}">
                @csrf -->

              
        <form action="{{route('userUpdate', $user->id)}}" method="post">
        @csrf

    <!-- ID  -->
    <div class="mt-4">
        <x-input-label for="id" :value="__('ID')" />

        <x-text-input id="id" class="block mt-1 w-full" type="text" name="id" :value="($user->id)" readonly/>

        <x-input-error :messages="$errors->get('id')" class="mt-2" />
    </div>

    <!-- Fullname -->
    <div class="mt-4">
        <x-input-label for="fullname" :value="__('Full Name')" />

        <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="($user->fullname)" />

        <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
    </div>

        <!-- Email -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />

        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="($user->email)" readonly/>

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


        <!-- Username -->
    <div class="mt-4">
        <x-input-label for="username" :value="__('Username')" />

        <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="($user->username)" readonly />

        <x-input-error :messages="$errors->get('username')" class="mt-2" />
    </div>

          <!--Address-->
    <div class="mt-4">
        <x-input-label for="address" :value="__('Address')" />

        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="($user->address)" />

        <x-input-error :messages="$errors->get('address')" class="mt-2" />
    </div>

        <!--Phone Number-->
    <div class="mt-4">
        <x-input-label for="phonenumber" :value="__('Phone Number')" />

        <x-text-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="($user->phonenumber)" />

        <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
    </div>

     <!--Birth Date-->
     <div class="mt-4">
        <x-input-label for="birthdate" :value="__('Birth Date')" />

        <x-text-input id="birthdate" class="block mt-1 w-full" type="text" name="birthdate" :value="($user->birthdate)" readonly/>

        <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
    </div>


                <!-- Submit -->
                <x-primary-button class="mt-4">
                        {{ __('Ok') }}
                </x-primary-button>
                <!-- Reset -->
                <x-primary-button class="mt-4">
                        {{ __('Reset') }}
                </x-primary-button>
            </form>
        </div>
    </div>
    
</x-app-layout>