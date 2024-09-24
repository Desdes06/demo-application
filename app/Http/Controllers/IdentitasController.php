<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

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
            'jenis_kelamin' => 'required|in:LAKI LAKI,PEREMPUAN',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string|max:255',
            'kel_desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'status_perkawinan' => 'required|in:SUDAH KAWIN,BELUM KAWIN',
            'pekerjaan' => 'required|string|max:255',
            'kewarganegaraan' => 'required|in:WNI,WNA',
            'berlaku_hingga' => 'required|string|max:255',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $nikEnkripsi = Crypt::encryptString($request->nik);

        $path = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = Storage::disk('s3')->put('images', $file);
        }

        Identitas::create([
            'nik' => $nikEnkripsi,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'rt_rw' => $request->rt_rw,
            'kel_desa' => $request->kel_desa,
            'kecamatan' => $request->kecamatan,
            'agama' => $request->agama,
            'status_perkawinan' => $request->status_perkawinan,
            'pekerjaan' => $request->pekerjaan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'berlaku_hingga' => $request->berlaku_hingga,
            'image' => $path
        ]);

        return redirect()->route('pagenav')->with('success', 'Data has been added successfully!');
    }
    
    public function show(string $id)
    {
        // Implementation for show method
    }

    public function update(Request $request, $id)
    {
        $user = Identitas::find($id);

        $request->validate([
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::disk('s3')->delete($user->image);
            }

            $file = $request->file('image');
            $path = Storage::disk('s3')->put('images', $file);
            $data['image'] = $path;
        }

        $user->update($data);

        return redirect()->route('pagenav')->with('success', 'Data has been updated successfully!');
    }

    public function destroy($id)
    {
        $user = Identitas::findOrFail($id);

        // Delete image from MinIO
        if ($user->image) {
            Storage::disk('s3')->delete($user->image);
        }

        $user->delete();

        return redirect()->route('pagenav')->with('success', 'Data has been deleted successfully!');
    }
}
