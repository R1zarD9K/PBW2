<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>
<!-- * Nama     : Rahmat Pratami
     * NIM      : 6706223136
     * Kelas    : 4603 -->
    <div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="card">
            <!-- <div class="card-header"><a href="{{ route('koleksi.registrasi') }}" class="btn btn-icon btn-dark">Tambah</a></div> -->
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script>
        $(document).on('click', '.view-detail', function () {
            var id = $(this).data('id');
            // Redirect ke rute infoKoleksi dengan parameter ID
            window.location.href = "{{ route('koleksi.infoKoleksi', '') }}/" + id;
        });
    </script>
@endpush
</x-app-layout>