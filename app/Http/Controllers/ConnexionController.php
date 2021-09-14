<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $resultat = Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password
        ]);

        if($resultat){
            return redirect('/');
        }
    }

    public function deconnexion(){
        auth()->logout();

        return redirect()->route('login');
    }
}
