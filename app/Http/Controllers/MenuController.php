<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;  // Pastikan model Menu sudah dibuat

class MenuController extends Controller
{
    // Menampilkan halaman form tambah stok menu
    public function create()
    {
        return view('admin.addstock');  // Mengarahkan ke view form tambah menu
    }

    // Menyimpan data menu yang baru ditambahkan
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Simpan data menu ke database
        Menu::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('menu.create')->with('success', 'Menu berhasil ditambahkan!');
    }
}
