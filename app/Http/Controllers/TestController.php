<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function search()
    {
        dd(Tour::search('name:Marco Parker IV')->get());

    }
}
