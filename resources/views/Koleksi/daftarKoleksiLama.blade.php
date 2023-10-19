<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>
<!-- 
| Nama  : Davin Wahyu Wardana
| NIM   : 6706223003
| Kelas : D3IF-4603 
-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('koleksi.registrasi') }}" class="btn btn-icon btn-dark">Tambah</a><br><br>
                    <table class="min-w-full table-auto"> 
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">No</th>
                                <th class="border px-4 py-2">Nama Koleksi</th>
                                <th class="border px-4 py-2">Jenis Koleksi</th>
                                <th class="border px-4 py-2">Jumlah Koleksi</th>
                                <th class="border px-4 py-2">Ditambahkan</th>
                                <th class="border px-4 py-2">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($koleksi as $key => $koleksii)
                                <tr>
                                    <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $koleksii->namaKoleksi }}</td>
                                    <td class="border px-4 py-2">{{ ($koleksii->jenisKoleksi == 1) ? 'Buku' : (($koleksii->jenisKoleksi == 2) ? 'Majalah' : 'Cakram Digital') }}</td>
                                    <td class="border px-4 py-2">{{ $koleksii->jumlahKoleksi }}</td>
                                    <td class="border px-4 py-2">{{ $koleksii->created_at }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('koleksi.infoKoleksi', $koleksii->id) }}" class="btn btn-icon btn-sm btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>