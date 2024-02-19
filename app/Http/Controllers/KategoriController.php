<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\tb_kategori;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(): View
    {
        //get posts
        $tb_kategoris = tb_kategori::latest()->paginate(5);

        //render view with posts
        return view('tb_kategoris.indexKategori', compact('tb_kategoris'));
    }
}
