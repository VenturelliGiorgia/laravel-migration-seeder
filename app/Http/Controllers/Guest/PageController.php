<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        $trainsList = Trains::whereDate("orario_di_partenza", "2023-01-24")->get();
        return view('home', compact('trainsList'));
    }
}
