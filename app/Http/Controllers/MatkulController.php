<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index() {
        $data = Matkul::all();
        return view('matkul.index', compact('data'));
    }
    public function store(Request $request) {
        Matkul::create($request->only('matkul','deskripsi'));
        return redirect()->back();
    }
}
