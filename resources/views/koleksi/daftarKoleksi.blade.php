<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('koleksiTambah') }}" class="inline-flex items-center px-4 py-2 mb-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Tambah koleksi
                    </a>
                    <table class = "w-full table table-striped table-hover" id="datatable">
                        <thead>
                        <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Jenis</th>
                                <th>Jumlah Awal</th>
                                <th>Jumlah Sisa</th>
                                <th>Jumlah Keluar</th>
                                <th>Opsi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#datatable').DataTable({
            ajax:'{{ url("getAllCollections")}}',
            serverSide: false,
            processing: true,
            deferRender: true,
            type: 'GET',
            destroy: true,
            columns:[
                {data:'id',name:'id'},
                {data:'judul',name:'judul'},
                {data:'jenis',name:'jenis'},
                {data:'jumlahAwal',name:'jumlahAwal'},
                {data:'jumlahSisa',name:'jumlahSisa'},
                {data:'jumlahKeluar',name:'jumlahKeluar'},
                {data:'action',name:'action', orderable: false, serchable: false}
            ]
        });
    });
</script>
</x-app-layout>