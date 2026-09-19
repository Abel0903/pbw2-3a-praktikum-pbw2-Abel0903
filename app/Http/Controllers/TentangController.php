<?php

namespace App\Http\Controllers;

class TentangController extends Controller
{
    public function index()
    {
        return view('tentang', [
            'nama' => 'Irfan Azmii Musyaffa', 
            'nim' => '607062530024',          
            'kelas' => 'D3IF-49-02',         
        ]);
    }
}
