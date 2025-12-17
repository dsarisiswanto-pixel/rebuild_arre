<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function page()
    {
        $items = Portofolio::limit(6)->get();
        return view('page', compact('items'));
    }

    public function allClients()
    {
        $items = Portofolio::all();
        return view('all_clients', compact('items'));
    }

    public function show($id)
    {
        $item = Portofolio::findOrFail($id);
        return view('detail', compact('item'));
    }

    public function dashboard()
    {
        $items = Portofolio::all();
        return view('dashboard', compact('items'));
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

        $input = $request->only(['nama', 'deskripsi', 'kategori', 'link', 'tanggal']);

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

        $input = $request->only(['nama', 'deskripsi', 'kategori', 'link', 'tanggal']);

        $oldImages = json_decode($portofolio->gambar, true) ?? [];


        if ($request->hasFile('gambar')) {
            foreach ($oldImages as $img) {
                $path = public_path('uploads/' . $img);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $newImages = [];
            foreach ($request->file('gambar') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $filename);
                $newImages[] = $filename;
            }

            $input['gambar'] = json_encode($newImages);
        } else {
         
            $input['gambar'] = json_encode($oldImages);
        }

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
