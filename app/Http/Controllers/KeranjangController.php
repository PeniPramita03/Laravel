<?php

namespace App\Http\Controllers;

use App\Models\keranjang;

use Illuminate\View\View;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $keranjangs = keranjang::latest()->paginate(5);

        //render view with posts
        return view('keranjangs.index', compact('keranjangs'));
    }
}
