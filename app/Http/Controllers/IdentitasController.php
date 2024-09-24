<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;



class IdentitasController extends Controller
{
    public function index()
    {
        $users = Identitas::all()->map(function ($user) {

            $user->nik = Crypt::decryptString($user->nik);
            return $user;
        });
    
        return view('pagenav', ['users' => $users]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'rt_rw' => 'required|integer|max:255',
            'kel_desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'status_perkawinan' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'kewarganegaraan' => 'required|string|max:255',
            'berlaku_hingga' => 'required|string|max:255',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        $file = $request->file('file');
        $filePath = 'uploads/' . time() . '_' . $file->getClientOriginalName();
        Storage::disk('minio')->put($filePath, file_get_contents($file));

        $endpoint = env('AWS_ENDPOINT'); 
        $bucket = env('AWS_BUCKET'); 
        $url = $endpoint . '/' . $bucket . '/' . $filePath;

        session()->flash('file_url', $url);

        $nikEnkripsi = Crypt::encryptString($request->nik);

        // $path = $request->file('image')->store('images', 's3');

        $identitas = new Identitas();

        $identitas->nik = $nikEnkripsi;
        $identitas->nama_lengkap = $request->nama_lengkap;
        $identitas->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $identitas->jenis_kelamin = $request->jenis_kelamin;
        $identitas->alamat = $request->alamat;
        $identitas->rt_rw = $request->rt_rw;
        $identitas->kel_desa = $request->kel_desa;
        $identitas->kecamatan = $request->kecamatan;
        $identitas->agama = $request->agama;
        $identitas->status_perkawinan = $request->status_perkawinan;
        $identitas->pekerjaan = $request->pekerjaan;
        $identitas->kewarganegaraan = $request->kewarganegaraan;
        $identitas->berlaku_hingga = $request->berlaku_hingga;
        $identitas->foto_ktp = $url;
        $identitas->image = $filePath;
        
        $identitas->save();

        return redirect()->route('pagenav')->with('success', 'Data has been added successfully!');
    }

    public function show(string $id)
    {
        
    }

    public function update(Request $request, $id)
{
    $user = Identitas::find($id);

    $delImg = $user->image;

    $request->validate([
        'nik' => 'nullable',
        'nama_lengkap' => 'nullable|string|max:255',
        'tempat_tanggal_lahir' => 'nullable|string|max:255',
        'jenis_kelamin' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'rt_rw' => 'nullable|integer|max:255',
        'kel_desa' => 'nullable|string|max:255',
        'kecamatan' => 'nullable|string|max:255',
        'agama' => 'nullable|string|max:255',
        'status_perkawinan' => 'nullable|string|max:255',
        'pekerjaan' => 'nullable|string|max:255',
        'kewarganegaraan' => 'nullable|string|max:255',
        'berlaku_hingga' => 'nullable|string|max:255',
        'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('file')) {
        if ($delImg) {
            Storage::disk('minio')->delete($delImg);
        }

        $newImg = $request->file('file');
        $filePath = 'uploads/' . time() . '_' . $newImg->getClientOriginalName();

        Storage::disk('minio')->put($filePath, file_get_contents($newImg));

        $user->image = $filePath ?? $user->image;
    }

    $user->update($request->except(['file'])); 

    $user->save();

    return redirect()->route('pagenav')->with('success', 'Data has been updated successfully!');
}

    public function destroy($id)
    {
        $user = Identitas::findOrFail($id);

        $delImg = Identitas::where('id', $id)->value('image');
        
        $user->delete();
        
        Storage::disk('minio')->delete($delImg);
        
        return redirect()->route('pagenav')->with('success', 'Data has been added successfully!');
    }
}