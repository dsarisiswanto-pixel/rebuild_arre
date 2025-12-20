<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function page()
    {
        $items = Portofolio::latest()->limit(6)->get();
        return view('page', compact('items'));
    }

    public function allClients()
    {
        $items = Portofolio::latest()->get();
        return view('all_clients', compact('items'));
    }

    public function show($id)
    {
        $item = Portofolio::findOrFail($id);
        return view('detail', compact('item'));
    }

    public function dashboard(Request $request)
    {
        $perPage = $request->get('per_page', 5);

        $items = Portofolio::latest()
            ->paginate($perPage)
            ->withQueryString();

        $totalKategori = Portofolio::distinct('kategori')->count('kategori');

        return view('dashboard', compact(
            'items',
            'perPage',
            'totalKategori'
        ));
    }

    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'link' => 'nullable|url',
            'tanggal' => 'required|date',
            'gambar.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $input = $request->only([
            'nama',
            'deskripsi',
            'kategori',
            'link',
            'tanggal'
        ]);

        $gambarNames = [];

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $filename);
                $gambarNames[] = $filename;
            }
        }

        $input['gambar'] = json_encode($gambarNames);

        Portofolio::create($input);

        return redirect()->route('dashboard')->with([
            'notif_type' => 'add',
            'notif_message' => 'Portofolio berhasil ditambahkan!'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'link' => 'nullable|url',
            'tanggal' => 'required|date',
            'gambar.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $portofolio = Portofolio::findOrFail($id);

        $input = $request->only([
            'nama',
            'deskripsi',
            'kategori',
            'link',
            'tanggal'
        ]);

        // ===============================
        // AMBIL GAMBAR LAMA
        // ===============================
        $oldImages = json_decode($portofolio->gambar, true) ?? [];

        // ===============================
        // HAPUS GAMBAR YANG DIKLIK ❌
        // ===============================
        $deletedImages = json_decode($request->hapus_gambar, true) ?? [];

        if (!empty($deletedImages)) {
            foreach ($deletedImages as $img) {
                $path = public_path('uploads/' . $img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            // buang dari array lama
            $oldImages = array_values(array_diff($oldImages, $deletedImages));
        }

        // ===============================
        // JIKA UPLOAD GAMBAR BARU
        // ===============================
        if ($request->hasFile('gambar')) {

            // kalau centang replace_gambar → hapus semua lama
            if ($request->has('replace_gambar')) {
                foreach ($oldImages as $img) {
                    $path = public_path('uploads/' . $img);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
                $oldImages = [];
            }

            foreach ($request->file('gambar') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $filename);
                $oldImages[] = $filename;
            }
        }

        // ===============================
        // SIMPAN FINAL
        // ===============================
        $input['gambar'] = json_encode($oldImages);

        $portofolio->update($input);

        return redirect()->route('dashboard')->with([
            'notif_type' => 'edit',
            'notif_message' => 'Portofolio berhasil diperbarui!'
        ]);
    }


    public function destroy($id)
    {
        $item = Portofolio::findOrFail($id);

        $images = json_decode($item->gambar, true);
        if ($images) {
            foreach ($images as $img) {
                $path = public_path('uploads/' . $img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }

        $item->delete();

        return redirect()->route('dashboard')->with([
            'notif_type' => 'delete',
            'notif_message' => 'Portofolio berhasil dihapus!'
        ]);
    }
}
