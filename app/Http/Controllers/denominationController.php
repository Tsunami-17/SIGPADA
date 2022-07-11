<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class denominationController extends Controller
{
    public function denomination(){
        if (auth()->guest()) {
            return redirect('login')->withErrors([
                'email' => "Vous devez être connecté pour voir cette page.",
            ]);
        }
        return view('pages.denomination');
    }
}
