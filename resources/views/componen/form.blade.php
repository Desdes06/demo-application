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
        data-dialog-backdrop="sign-in-dialog"
        data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div
            data-dialog="sign-in-dialog"
            class="fixed top-5  mx-auto grid h-4/5 flex w-4/5 flex-col rounded-xl bg-[#A5D6C1] text-gray-700 shadow-md p-4">
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
                <form action="/submit-form" method="POST" class="px-24">
                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-lg font-bold mb-2 text-white">NIK</label>
                        <input type="text" id="name" name="name" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-lg font-bold mb-2 text-white">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-lg font-bold mb-2 text-white">Tempat, Tanggal Lahir</label>
                        <input type="text" id="name" name="name" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="gender" class="text-lg font-bold mb-2 text-white">Jenis Kelamin</label>
                        <div class="relative">
                            <select id="gender" name="gender" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="male">LAKI-LAKI</option>
                                <option value="female">PEREMPUAN</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-lg font-bold mb-2 text-white">Alamat</label>
                        <input type="text" id="name" name="name" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>
                    {{-- rt rw --}}
                    <div class="pl-24">
                        <div class="flex flex-row items-center mb-3">
                            <label for="rt_rw" class="text-lg font-bold text-white w-1/4">RT/RW</label>
                            <input type="text" id="rt_rw" name="rt_rw" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kel_desa" class="text-lg font-bold text-white w-1/4">Kel/Desa</label>
                            <input type="text" id="kel_desa" name="kel_desa" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full">
                        </div>
                    
                        <div class="flex flex-row items-center mb-3">
                            <label for="kecamatan" class="text-lg font-bold text-white w-1/4">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full">
                        </div>
                    </div>
                    
                    <div class="flex flex-col mb-3">
                        <label for="gender" class="text-lg font-bold mb-2 text-white">Agama</label>
                        <div class="relative">
                            <select id="gender" name="gender" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="1">ISLAM</option>
                                <option value="2">KONGHUCU</option>
                                <option value="3">KRITEN KATOLIK</option>
                                <option value="4">HINDU</option>
                                <option value="5">BUDHA</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="gender" class="text-lg font-bold mb-2 text-white">Status Perkawinan</label>
                        <div class="relative">
                            <select id="gender" name="gender" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="1">SUDAH KAWIN</option>
                                <option value="2">BELUM KAWIN</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-lg font-bold mb-2 text-white">Pekerjaan</label>
                        <input type="text" id="name" name="name" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2">
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="gender" class="text-lg font-bold mb-2 text-white">Kewarganegaraan</label>
                        <div class="relative">
                            <select id="gender" name="gender" class="border-2 rounded-full px-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 w-full appearance-none pr-10">
                                <option class="hidden" value="0">pilih</option>
                                <option value="1">WNI</option>
                                <option value="2">WNA</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mb-3">
                        <label for="name" class="text-lg font-bold mb-2 text-white">Berlaku Hingga</label>
                        <input type="text" id="name" name="name" class="border-2 rounded-full pl-5 bg-[#4FCF9E] border-[#458B70] text-white text-md font-semibold py-2 mb-3">
                    </div>
                    <div class="flex flex-col mb-3">
                        <button class="rounded-xl px-6 py-2 text-white text-md font-semibold bg-[#6CE3DF] border-2 border-[#5AC6BE] w-3/12">Upload foto/File</button>
                    </div>
                </form>
            </div>
            <div class="flex justify-end place-items-center p-4">
                <button class="rounded-full px-6 py-2 text-white text-lg font-semibold bg-[#3CB371]">simpan</button>
            </div>
        </div>
    </div>

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
</body>

</html>