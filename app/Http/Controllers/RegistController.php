<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class RegistController extends Controller
{
    public function index() {
        return view('registration');
    }


    public function traitement(StoreRequest $request) {
    
    
        $create = Event::create([
            'nom' => $request->CAT_Custom_1,
            'email' => $request->CAT_Custom_2,
            'phone' => $request->CAT_Custom_3,
            'fonction' => $request->CAT_Custom_5,
            'ministere' => $request->CAT_Custom_6,
            'questions' => $request->CAT_Custom_7,
            'institution' => $request->CAT_Custom_4,
        ]);
    
        return redirect()->route('registration');
    }
}
