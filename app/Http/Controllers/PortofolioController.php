<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{

    
    // Halaman utama / landing page (ambil 6 item pertama)
    public function page()
    {
        $items = Portofolio::limit(6)->get();
        return view('page', compact('items'));
    }

    // Halaman "Lihat Semua Klien" / semua portofolio
    public function allClients()
    {
        $items = Portofolio::all(); 
        return view('all_clients', compact('items')); // pastikan ada view all_clients.blade.php
    }

    // Tampilkan detail satu portofolio
    public function show($id)
    {
        $item = Portofolio::findOrFail($id);
        return view('detail_portofolio', compact('item'));
    }

    // Tampilkan semua portofolio di dashboard
    public function dashboard()
    {
        $items = Portofolio::all();
        return view('dashboard', compact('items'));
    }

    // Form tambah portofolio
    public function create()
    {
        return view('tambah');
    }

    // Simpan data portofolio baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $input['gambar'] = $filename;
        }

        Portofolio::create($input);

        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan!');
    }

    // Form edit portofolio
    public function edit($id)
    {
        $item = Portofolio::findOrFail($id);
        return view('edit', compact('item'));
    }

    // Update data portofolio
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = Portofolio::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('gambar')) {
            if ($item->gambar && file_exists(public_path('uploads/' . $item->gambar))) {
                unlink(public_path('uploads/' . $item->gambar));
            }

            $file = $request->file('gambar');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $input['gambar'] = $filename;
        } else {
            $input['gambar'] = $item->gambar;
        }

        $item->update($input);

        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui!');
    }

    // Hapus portofolio
    public function destroy($id)
    {
        $item = Portofolio::findOrFail($id);

        if ($item->gambar && file_exists(public_path('uploads/' . $item->gambar))) {
            unlink(public_path('uploads/' . $item->gambar));
        }

        $item->delete();

        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
