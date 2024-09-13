<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
     {

   return view('menu');
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $no_kursi = $request->input('no_kursi');
        $catatan = $request->input('catatan');
        $info = $request->input('info');

        DB::table('order')->insert([
            'no_kursi' => $no_kursi,
            'catatan' => $catatan,
            'info' => $info
        ]);

        return redirect('/menu');
    }

    /**
     * Display the specified resource.
     */
//     public function show()
//     {
//         if(!Auth::check()) {
//             return redirect('login');
//         }
//         $posts =DB::table('718model')
//         ->select('id','image','name_car','harga')
//         ->get();
// $view_data = [
// 'posts' => $posts
// ];
// return view('App.User.page_model.show718' , $view_data);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         if(!Auth::check()) {
//             return redirect('login');
//         }
//         $post = DB::table('718model')
//         ->select('id','image','image_samping','name_car','harga')
//         ->where('id', '=', $id)
//         ->first();

//         $view_data = [
//             'post' => $post
//         ];
//         return view('App/Admin/pagemodel/718/edit718' , $view_data);
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         if(!Auth::check()) {
//             return redirect('login');
//         }
//         $image = $request->input('image');
//         $image_samping = $request->input('image_samping');
//         $name_car = $request->input('name_car');
//         $harga = $request->input('harga');
//         DB::table('718model') 
//         ->where('id', $id)
//         ->update([
//             'image' => $image, 
//             'image_samping' => $image_samping, 
//             'name_car' => $name_car,
//             'harga' => $harga
//         ]);
//         return redirect("/posts");
//     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('login');
        }
        DB::table('order')
        ->where('id', $id)
        ->delete();

    return redirect("/dashboard/admin");
    }
}