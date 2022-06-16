<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function update($id){
        \Auth::user()->themechange($id);
        return back();
    }
}
