<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    public function index()
    {
        return view('pengeluaran', [
            'title' => 'Total Pengeluaran',
            'page' => 'Pengeluaran',
            'data' => Pengeluaran::all()
        ]);
    }  
}
