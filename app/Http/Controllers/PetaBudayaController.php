<?php

namespace App\Http\Controllers;

class PetaBudayaController extends Controller
{
    public function index()
    {
        $username = session('username', 'Pengguna');
        return view('peta_budaya', compact('username'));
    }
}
