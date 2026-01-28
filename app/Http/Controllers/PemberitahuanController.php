<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemberitahuanController extends Controller
{
    public function index()
    {
        $username = session('username', 'Pengguna');

        $infoList = session('info_list', []);
        $infoList = array_reverse($infoList); // sama seperti PHP kamu

        return view('pemberitahuan', [
            'username' => $username,
            'info_list' => $infoList,
        ]);
    }

    public function store(Request $request)
    {
        $judul = trim((string) $request->input('judul', ''));
        $isi   = trim((string) $request->input('isi', ''));

        $list = session('info_list', []);

        if ($judul !== '' || $isi !== '') {
            $list[] = [
                'judul' => $judul,
                'isi'   => $isi,
                'waktu' => now()->format('d-m-Y H:i'),
            ];
        }

        session(['info_list' => $list]);

        return redirect()->route('pemberitahuan');
    }
}
