<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function tambah(string $nomor)
    {
        $nomorInt = (int) $nomor;

        $nomorInt++;

        return $nomorInt;
    }


// use Illuminate\Http\Request;

// class DefaultController extends Controller
// {
//     public function tambah($id)
//     {
//         // Logika untuk menambah user atau melakukan sesuatu dengan user ID
//         // Misalnya, mengambil user dari database
//         $user = User::find($id);

//         if (!$user) {
//             return response()->json(['message' => 'User not found'], 404);
//         }

//         // Misalnya, menampilkan informasi user
//         return view('user.show', ['user' => $user]);
//     }
// }

}
