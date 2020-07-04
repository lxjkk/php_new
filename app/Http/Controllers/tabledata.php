<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tabledata extends Controller
{
    //
    public function alltable(Request $request) {
        return $request->user();
    }
}
