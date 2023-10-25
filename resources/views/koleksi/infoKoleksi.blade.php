<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Info Koleksi') }}
            </h2>
        </x-slot>

        <!-- <form method="POST" action="{{ route('userStore') }}">
                @csrf -->

              
        <form action="{{route('koleksiUpdate', $collections->id)}}" method="post">
        @csrf

    <!-- ID Koleksi -->
    <div class="mt-4">
        <x-input-label for="id" :value="__('ID Koleksi')" />

        <x-text-input id="idKoleksi" class="block mt-1 w-full" type="text" name="id" :value="($collections->id)" readonly/>

        <x-input-error :messages="$errors->get('idKoleksi')" class="mt-2" />
    </div>

    <!-- Judul Koleksi -->
    <div class="mt-4">
        <x-input-label for="judulKoleksi" :value="__('Judul Koleksi')" />

        <x-text-input id="judulKoleksi" class="block mt-1 w-full" type="text" name="nama" :value="($collections->namaKoleksi)" readonly/>

        <x-input-error :messages="$errors->get('judulKoleksi')" class="mt-2" />

    <!-- Jenis -->
    <div class="mt-4">
            <x-input-label for="Jenis Koleksi" :value="__('Jenis Koleksi')" />

            <select id="jenis" name ="jenis" class="form-select" required>
                <option value="-1" @if(old('jenis', $collections->jenisKoleksi) == -1) selected @endif>Pilih satu</option>
                <option value="1" @if(old('jenis', $collections->jenisKoleksi) == 1) selected @endif>Buku</option>
                <option value="2" @if(old('jenis', $collections->jenisKoleksi) == 2) selected @endif>Majalah</option>
                <option value="3" @if(old('jenis', $collections->jenisKoleksi) == 3) selected @endif>Cakram Digital</option>
            </select>
    </div>
            <!-- <x-input-error :messages="$errors->get('fullname')" class="mt-2" /> -->

<!--Jumlah Awal-->
    <div class="mt-4">
        <x-input-label for="jumlahAwal" :value="__('Jumlah Awal')" />

        <x-text-input id="jumlahAwal" class="block mt-1 w-full" type="text" name="jumlahAwal" :value="($collections->jumlahAwal)"/>

        <x-input-error :messages="$errors->get('jumlahAwal')" class="mt-2" />
    </div>
    <!-- Jumlah Sisa -->
        <div class="mt-4">
            <x-input-label for="jumlahSisa" :value="__('Jumlah Sisa')" />

            <x-text-input id="jumlahSisa" class="block mt-1 w-full" type="text" name="jumlahSisa" :value="($collections->jumlahSisa)" />

            <x-input-error :messages="$errors->get('jumlahSisa')" class="mt-2" />
        </form>

        <!-- Jumlah Keluar-->
         <div class="mt-4">
            <x-input-label for="jumlahKeluar" :value="__('Jumlah Keluar')" />

            <x-text-input id="jumlahKeluar" class="block mt-1 w-full" type="text" name="jumlahKeluar" :value="($collections->jumlahKeluar)"/>

            <x-input-error :messages="$errors->get('jumlahKeluar')" class="mt-2" />
        </form> 


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