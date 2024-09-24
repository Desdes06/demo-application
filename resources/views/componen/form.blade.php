
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div
        data-dialog-backdrop="add-dialog"
        data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div
            data-dialog="add-dialog"
            class="fixed mx-auto grid h-4/5 flex w-4/5 flex-col rounded-xl bg-[#A5D6C1] text-gray-700 shadow-md p-4">
            
            <div class="flex justify-end flex-row py-6 place-items-center sticky top-0">
                <div class="basis-full text-4xl font-bold text-center text-white">Data Lengkap</div>
                <div class="basis-1/12 place-items-center">
                    <button type="button" class="pointer-events-auto" data-dialog-close="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-white">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="overflow-y-scroll h-full py-5 px-2">
                <form action="{{ route('identitas.store') }}" method="POST" enctype="multipart/form-data" class="px-24">
                    @csrf
                    <div class="flex flex-col mb-3">
                        <label for="nik" class="text-xl font-bold mb-2 text-white">NIK</label>
                        <input type="text" id="nik" name="nik" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="nama" class="text-xl font-bold mb-2 text-white">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama_lengkap" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="tempat_tanggal_lahir" class="text-xl font-bold mb-2 text-white">Tempat, Tanggal Lahir</label>
                        <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="status" class="text-xl font-bold mb-2 text-white">Jenia Kelamin</label>
                        <div class="relative">
                            <select id="jenis_kelamin" name="jenis_kelamin" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="LAKI LAKI">LAKI LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="alamat" class="text-xl font-bold mb-2 text-white">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>
                
                    <div class="pl-24">
                        <div class="flex flex-row items-center mb-3">
                            <label for="rt_rw" class="text-xl font-bold text-white w-1/4">RT/RW</label>
                            <input type="text" id="rt_rw" name="rt_rw" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kel_desa" class="text-xl font-bold text-white w-1/4">Kel/Desa</label>
                            <input type="text" id="kel_desa" name="kel_desa" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kecamatan" class="text-xl font-bold text-white w-1/4">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full">
                        </div>
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="agama" class="text-xl font-bold mb-2 text-white">Agama</label>
                        <div class="relative">
                            <select id="agama" name="agama" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="ISLAM">ISLAM</option>
                                <option value="KONGHUCU">KONGHUCU</option>
                                <option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="status" class="text-xl font-bold mb-2 text-white">Status Perkawinan</label>
                        <div class="relative">
                            <select id="status_perkawinan" name="status_perkawinan" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="SUDAH KAWIN">SUDAH KAWIN</option>
                                <option value="BELUM KAWIN">BELUM KAWIN</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="pekerjaan" class="text-xl font-bold mb-2 text-white">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>
                
                    <div class="flex flex-col mb-3">
                        <label for="kewarganegaraan" class="text-xl font-bold mb-2 text-white">Kewarganegaraan</label>
                        <div class="relative">
                            <select id="kewarganegaraan" name="kewarganegaraan" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="pekerjaan" class="text-xl font-bold mb-2 text-white">Berlaku Hingga</label>
                        <input type="text" id="berlaku_hingga" name="berlaku_hingga" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>
                
                    <!-- Input File -->
                    <div class="flex flex-col mb-3">
                        <input type="file" id="fileInput" name="image" accept="image/*" class="hidden" onchange="previewImage(event)" />
                        <button type="button" id="uploadButton" class="rounded-xl px-6 py-2 text-white text-md font-semibold bg-[#6CE3DF] border-2 border-[#5AC6BE] w-3/12" onclick="triggerUpload()">
                            Upload foto/File
                        </button>
                        <div id="imagePreviewContainer" class="flex items-baseline mt-3 hidden">
                            <img id="imagePreview" class="w-25 h-40 object-cover rounded-md mr-3" />
                            <button type="button" id="changeButton" class="rounded-full px-6 py-2 text-white text-md font-semibold bg-[#6CE3DF] border-2 border-[#5AC6BE]" onclick="triggerUpload()">
                                Ubah
                            </button>
                        </div>
                    </div>
                
                    <!-- Submit Button -->
                    <div class="flex justify-end place-items-center p-4">
                        <button type="submit" class="rounded-full px-6 py-2 text-white text-xl font-semibold bg-[#3CB371]">
                            Simpan
                        </button>
                    </div>
                </form>                
            </div>
        </div>
    </div>

    {{-- edit --}}
    @foreach($users as $user)
    <div
        data-dialog-backdrop="edit-dialog-{{$user->id}}"
        data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div
            data-dialog="edit-dialog-{{$user->id}}"
            class="fixed mx-auto grid h-4/5 flex w-4/5 flex-col rounded-xl bg-[#A5D6C1] text-gray-700 shadow-md p-4">
            <div class="flex justify-end flex-row py-6 place-items-center sticky top-0">
                <div class="basis-full text-4xl font-bold text-center text-white">Data Lengkap</div>
                <div class="basis-1/12 place-items-center">
                    <button type="button" class="pointer-events-auto" data-dialog-close="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-white">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="overflow-y-scroll h-full py-5 px-2">
                <form action="{{ route('identitas.update', $user->id) }}" enctype="multipart/form-data" method="POST" class="px-24">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col mb-3">
                        <label for="nik" class="text-xl font-bold mb-2 text-white">NIK</label>
                        <input type="text" id="nik" name="nik" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 disabled:bg-[#2D8A67]" disabled value="{{$user->nik}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="nama" class="text-xl font-bold mb-2 text-white">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" value="{{$user->nama_lengkap}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="tempat_tanggal_lahir" class="text-xl font-bold mb-2 text-white">Tempat, Tanggal Lahir</label>
                        <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" value="{{$user->tempat_tanggal_lahir}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="gender" class="text-xl font-bold mb-2 text-white">Jenis Kelamin</label>
                        <div class="relative">
                            <select id="jenis_kelamin" name="jenis_kelamin" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="{{$user->jenis_kelamin ? $user->jenis_kelamin : null }}">{{$user->jenis_kelamin ? $user->jenis_kelamin : 'pilih'}} </option>
                                <option value="LAKI LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="alamat" class="text-xl font-bold mb-2 text-white">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" value="{{$user->alamat}}">
                    </div>
                    {{-- rt rw --}}
                    <div class="pl-24">
                        <div class="flex flex-row items-center mb-3">
                            <label for="rt_rw" class="text-xl font-bold text-white w-1/4">RT/RW</label>
                            <input type="text" id="rt_rw" name="rt_rw" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" value="{{$user->rt_rw}}">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kel_desa" class="text-xl font-bold text-white w-1/4">Kel/Desa</label>
                            <input type="text" id="kel_desa" name="kel_desa" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" value="{{$user->kel_desa}}">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kecamatan" class="text-xl font-bold text-white w-1/4">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" value="{{$user->kecamatan}}">
                        </div>
                    </div>
                    
                    <div class="flex flex-col mb-3">
                        <label for="agama" class="text-xl font-bold mb-2 text-white">Agama</label>
                        <div class="relative">
                            <select id="agama" name="agama" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10" value="{{$user->agama}}">
                                <option class="hidden" value="{{$user->agama ? $user->agama : null }}">{{$user->agama ? $user->agama : 'pilih' }}</option>
                                <option value="ISLAM">ISLAM</option>
                                <option value="KONGHUCU">KONGHUCU</option>
                                <option value="KRISTEN KATOLIK">KRITEN KATOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="status" class="text-xl font-bold mb-2 text-white">Status Perkawinan</label>
                        <div class="relative">
                            <select id="status_perkawinan" name="status_perkawinan" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10" value="{{$user->status_perkawinan}}">
                                <option class="hidden" value="{{$user->status_perkawinan ? $user->status_perkawinan : null }}">{{$user->status_perkawinan ? $user->status_perkawinan : 'pilih' }}</option>
                                <option value="SUDAH KAWIN">SUDAH KAWIN</option>
                                <option value="BELUM KAWIN">BELUM KAWIN</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="pekerjaan" class="text-xl font-bold mb-2 text-white">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" value="{{$user->pekerjaan}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="kewarganegaraan" class="text-xl font-bold mb-2 text-white">Kewarganegaraan</label>
                        <div class="relative">
                            <select id="kewarganegaraan" name="kewarganegaraan" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10" value="{{$user->kewarganegaraan}}">
                                <option class="hidden" value="{{$user->kewarganegaraan ? $user->kewarganegaraan : null }}">{{$user->kewarganegaraan ? $user->kewarganegaraan : 'pilih' }}</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="berlaku" class="text-xl font-bold mb-2 text-white">Berlaku Hingga</label>
                        <input type="text" id="berlaku_hingga" name="berlaku_hingga" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 mb-3" value="{{$user->berlaku_hingga}}">
                    </div>
                    <div id="photoPreviewContainer" class="flex items-baseline mt-3">
                        <img id="photoPreview-{{$user->id}}" src="{{ Storage::disk('s3')->url($user->image) }}" class="w-25 h-40 object-cover rounded-md mr-3" />
                        <input type="file" id="editPhotoInput-{{$user->id}}" name="image" accept="image/*" onchange="updatePhotoPreview(event, {{$user->id}})" style="display:none;" />
                        <button type="button" id="editPhotoButton-{{$user->id}}" class="rounded-full px-6 py-2 text-white text-md font-semibold bg-[#6CE3DF] border-2 border-[#5AC6BE]" onclick="initiatePhotoEdit({{$user->id}})">
                            Ubah
                        </button>
                    </div>        
                    <div class="flex justify-end place-items-center p-4">
                        <button class="rounded-full px-6 py-2 text-white text-lg font-semibold bg-[#3CB371]" type="submit">
                            simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    {{-- view --}}
    @foreach($users as $user)
    <div
        data-dialog-backdrop="view-dialog-{{$user->id}}"
        data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div
            data-dialog="view-dialog-{{$user->id}}"
            class="fixed mx-auto grid h-4/5 flex w-4/5 flex-col rounded-xl bg-[#A5D6C1] text-gray-700 shadow-md p-4">
            <div class="flex justify-end flex-row py-6 place-items-center sticky top-0">
                <div class="basis-full text-4xl font-bold text-center text-white">Data Lengkap</div>
                <div class="basis-1/12 place-items-center">
                    <button type="button" class="pointer-events-auto" data-dialog-close="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-white">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="overflow-y-scroll h-full py-5 px-2">
                <form class="px-24">
                    <div class="flex flex-col mb-3">
                        <label for="nik" class="text-xl font-bold mb-2 text-white">NIK</label>
                        <input type="text" id="nik" name="nik" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" disabled value="{{$user->nik}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="nama" class="text-xl font-bold mb-2 text-white">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" disabled value="{{$user->nama_lengkap}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="ttl" class="text-xl font-bold mb-2 text-white">Tempat, Tanggal Lahir</label>
                        <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" disabled value="{{$user->tempat_tanggal_lahir}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="jenis_kelamin" class="text-xl font-bold mb-2 text-white">Jenis Kelamin</label>
                        <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" disabled value="{{$user->jenis_kelamin}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="alamat" class="text-xl font-bold mb-2 text-white">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" disabled value="{{$user->alamat}}">
                    </div>
                    {{-- rt rw --}}
                    <div class="pl-24">
                        <div class="flex flex-row items-center mb-3">
                            <label for="rt_rw" class="text-xl font-bold text-white w-1/4">RT/RW</label>
                            <input type="text" id="rt_rw" name="rt_rw" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" disabled value="{{$user->rt_rw}}">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kel_desa" class="text-xl font-bold text-white w-1/4">Kel/Desa</label>
                            <input type="text" id="kel_desa" name="kel_desa" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" disabled value="{{$user->kel_desa}}">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kecamatan" class="text-xl font-bold text-white w-1/4">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" disabled disabled value="{{$user->kecamatan}}">
                        </div>
                    </div>
                    
                    <div class="flex flex-row items-center mb-3">
                        <label for="agama" class="text-xl font-bold text-white w-1/4">Agama</label>
                        <input type="text" id="agama" name="agama" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" disabled disabled value="{{$user->agama}}">
                    </div>

                    <div class="flex flex-row items-center mb-3">
                        <label for="kecamatan" class="text-xl font-bold text-white w-1/4">Status Perkawinan</label>
                        <input type="text" id="status_perkawinan" name="status_perkawinan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full" disabled disabled value="{{$user->status_perkawinan}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="pekerjaan" class="text-xl font-semibold mb-2 text-white">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" disabled value="{{$user->pekerjaan}}">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="kewarganegaraan" class="text-xl font-semibold mb-2 text-white">Kewarganegaraan</label>
                        <input type="text" id="Kewarganegaraan" name="kewarganegaraan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2" disabled value="{{$user->kewarganegaraan}}">
                    </div>
                    
                    <div class="flex flex-col mb-3">
                        <label for="berlaku" class="text-xl font-bold mb-2 text-white">Berlaku Hingga</label>
                        <input type="text" id="berlaku_hingga" name="berlaku_hingga" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 mb-3" disabled value="{{$user->berlaku_hingga}}">
                    </div>
                    <div id="imagePreviewContainer" class="flex items-baseline mt-3">
                        <img id="imagePreview"  src="{{ Storage::disk('s3')->url($user->image) }}" class="w-25 h-40 object-cover rounded-md mr-3" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    
<script>
    function triggerUpload() {
        document.getElementById('fileInput').click();
    }
    
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = e.target.result;
                document.getElementById('imagePreviewContainer').classList.remove('hidden');
                document.getElementById('uploadButton').classList.add('hidden');
                document.getElementById('changeButton').classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<script>
    function initiatePhotoEdit(userId) {
        document.getElementById(`editPhotoInput-${userId}`).click();
    }
    
    function updatePhotoPreview(event, userId) {
        const selectedFile = event.target.files[0];
        if (selectedFile) {
            const fileReader = new FileReader();
            fileReader.onload = function(e) {
                const photoPreviewElement = document.getElementById(`photoPreview-${userId}`);
                photoPreviewElement.src = e.target.result;
            };
            fileReader.readAsDataURL(selectedFile);
        }
    }
</script>

@vite('resources/js/dialog.js')
</body>

</html>