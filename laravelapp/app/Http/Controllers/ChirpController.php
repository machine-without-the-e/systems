<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ChirpController extends Controller
{
    public function index(): View {
        return view('chirps', []);
    }

}


