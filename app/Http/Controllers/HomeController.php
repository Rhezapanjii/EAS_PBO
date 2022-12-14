<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $users = User::query();
            return DataTables::of($users)

                ->make();
        }
        return view('home');
    }
}