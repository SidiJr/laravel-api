<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index()
    {
        return Carro::all();
    }
}
