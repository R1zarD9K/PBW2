<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>
 <!-- 
Nama    : Davin Wahyu Wardana
NIM     : 6706223003
Kelas   : D3IF-4603 
-->
    <div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="card">
            <!-- <div class="card-header"><a href="{{ route('user.registrasi') }}" class="btn btn-icon btn-dark">Tambah</a></div> -->
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
</x-app-layout>