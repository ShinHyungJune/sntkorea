<?php

namespace App\Http\Controllers;

class LogController extends Controller
{
    public function index()
    {
        return view('user.main-menu.log.log_index');
    }
}