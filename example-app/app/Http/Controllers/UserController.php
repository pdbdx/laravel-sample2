<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight; // 追加

class UserController extends Controller
{
    public function index()
    {
        $flights = Flight::all(); // 追加 全件取得
        return view('example', [
            'flights' => $flights
        ]);
    }
}
