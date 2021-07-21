<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;
use App\Models\Book;

class LendingController extends Controller
{
    // 貸出中の本を表示
    public function index()
    {
        $datas = Lending::whereNull('return_date')
            ->with('book')
            ->with('user')
            ->get();
        return view('index', ['datas' => $datas]);
    }

    // 貸し出し履歴
    public function index_all()
    {
        $datas = Lending::get();
        return view('lendings.index', ['datas' => $datas]);
    }
}
