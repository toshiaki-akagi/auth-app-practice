<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // ログイン中のユーザー情報を取得
        $user = $request->user();

        return view('dashboard', ['user' => $user]);
    }
}
