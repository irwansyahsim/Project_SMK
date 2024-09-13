<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =DB::table('users')
        ->select('id','name','email','email_verified')
        ->get();
$view_data = [
'posts' => $posts
];
return view('admin.user' , $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = DB::table('users')
        ->select('id','name','email','email_verified')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];

        return view('admin.userEdit' , $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $email_verified = $request->input('email_verified');
        DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => $name,
            'email' => $email,
            'email_verified' => $email_verified
        ]);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Menghapus user berdasarkan ID
        DB::table('users')
        ->where('id', '=', $id)
        ->delete();

        // Mengarahkan kembali ke halaman daftar pengguna setelah penghapusan
        return redirect('/user')->with('success', 'User deleted successfully.');
    }
}
