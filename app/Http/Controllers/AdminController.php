<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        $reports = Report::all();
        $data = ['title' => 'Admin', 'reports' => $reports];
        return view('velamar.admin.admin', $data);
    }
}
