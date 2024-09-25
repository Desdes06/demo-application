@include('componen/navbar', ['active' => 'pagenav'])
@include('componen/form')
@include('css')
    <div class="crud-layout flex items-center">
        <div class="main-title flex items-center">
            <div class="arrow">
                <a href="/"><img src="{{ asset('Vector.png') }}" alt=""></a>
            </div>
            <div class="title ml-20">
                <h1 class="text-gradient-orange-500 to-green-400">Data KTP Pribadi</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="pl-8">
        <button 
            class="flex items-center pl-24"
            type="button"
            data-dialog-target="add-dialog">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" class="bi bi-plus-circle mr-4" fill="#5175E3"viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
            <p class="ml-3 text-xl text-[#98A2B2]">Tambah Berkas</p>
        </button>
    </div>

    <div class="px-24 py-10">
        <table class="w-full border-collapse border border-gray-200">
            <thead class="bg-[#4FCF9E]">
                <tr>
                    <th class="border border-gray-200 px-6 py-4 text-center text-xl text-white">NIK</th>
                    <th class="border border-gray-200 px-6 py-4 text-center text-xl text-white">Nama Lengkap</th>
                    <th class="border border-gray-200 px-6 py-4 text-center text-xl text-white">Tempat, Tanggal Lahir</th>
                    <th class="border border-gray-200 px-6 py-4 text-center text-xl text-white" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                <tr class="{{ $index % 2 == 0 ? 'bg-[#A5D6C1]' : 'bg-[#4FCF9E]' }} hover:bg-[#75C1A4]">
                    <td class="border border-gray-200 px-6 py-4 text-center" hidden>{{ $user->id }}</td>
                    <td class="border border-gray-200 px-6 py-4 text-center text-lg text-white">{{ $user->nik }}</td>
                    <td class="border border-gray-200 px-6 py-4 text-center text-lg text-white">{{ $user->nama_lengkap }}</td>
                    <td class="border border-gray-200 px-6 py-4 text-center text-lg text-white">{{ $user->tempat_tanggal_lahir }}</td>
                    <td class="border border-gray-200 px-6 py-4 text-center flex justify-center items-center space-x-1 text-lg">
                        <button type="button" class="flex-shrink-0">
                            <img src="{{ asset('editt.png') }}" data-dialog-target="edit-dialog-{{$user['id']}}" alt="Edit" class="w-8 h-8">
                        </button>
                        <button type="button" class="flex-shrink-0" onclick="openDeleteModal({{ $user['id'] }})">
                            <img src="{{ asset('trash.png') }}" alt="Hapus" class="w-8 h-8">
                        </button>
                        <button type="button" class="flex-shrink-0 mt-2" data-dialog-target="view-dialog-{{$user['id']}}">
                            <div style="background-color: #FFDD2D; display: inline-block; padding: 8px; border-radius: 6.5px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </div>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

    {{-- popup delete --}}
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-[#A5D6C1] rounded-lg p-8 w-1/3 h-1/3">
            <p class="mt-4 text-white text-5xl items-center">Anda yakin akan menghapus data ini?</p>
            <div class="flex justify-end mt-24">
                <button id="cancelButton" class="bg-[#4FCF9E] text-white px-4 py-2 rounded-md mr-2">
                    Batalkan
                </button>
                <form id="deleteForm" method="POST" action="" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
<script>
    function openDeleteModal(userId) {
    const deleteForm = document.getElementById('deleteForm');
    deleteForm.action = `/delete/${userId}`; // Atur URL aksi formulir
    document.getElementById('deleteModal').classList.remove('hidden');
    }

    document.getElementById('cancelButton').onclick = function() {
        document.getElementById('deleteModal').classList.add('hidden');
    };
</script>
{{-- popup delete --}}

@vite('resources/js/dialog.js')
