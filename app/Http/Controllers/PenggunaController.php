<?php

namespace App\Http\Controllers;

use App\Models\pengguna;

use Illuminate\View\View;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
     /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $penggunas = pengguna::latest()->paginate(5);

        //render view with posts
        return view('penggunas.index', compact('penggunas'));
    }
}
