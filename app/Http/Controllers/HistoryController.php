<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class HistoryController extends Controller
{
    //
    public function index()
    {
        $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        return view('history.index', compact('pesanans'));
    }
    public function detail($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        return view('history.detail', compact('pesanan', 'pesanan_details',));
    }
}
