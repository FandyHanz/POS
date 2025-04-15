<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $username = Auth::user()->username;

        $imagePathPng = 'storage/img/' . $username . '.png';
        $imagePathJpg = 'storage/img/' . $username . '.jpg';

        if (file_exists(public_path($imagePathPng))) {
            $profileImage = asset($imagePathPng);
        } elseif (file_exists(public_path($imagePathJpg))) {
            $profileImage = asset($imagePathJpg);
        } else {
            $profileImage = asset('img/user.png'); // fallback image
        }

        return view('dashboard', [ // ganti 'dashboard' sesuai nama blade kamu
            'profileImage' => $profileImage,
        ]);
    }

    public function update_photo(Request $request)
    {
        // Validasi request
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        try {
            // Dapatkan user yang sedang login
            $user = auth()->user();

            // Jika user tidak ditemukan
            if (!$user) {
                return back()->with('error', 'User tidak ditemukan!');
            }

            $username = $user->username;
            $path = 'public/img/'; // Gunakan storage path
            $imgName = $username . '.' . $request->profile_photo->extension();

            // Hapus foto lama jika ada
            if ($user->photo && Storage::exists($path . $user->photo)) {
                Storage::delete($path . $user->photo);
            }

            // Simpan foto baru
            $request->profile_photo->move($path, $imgName);

            // Update path foto di database
            $user->photo = $imgName;

            return back()->with('success', 'Foto profil berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui foto profil: ' . $e->getMessage());
        }
    }
}
