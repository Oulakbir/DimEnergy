<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\evaluations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests; 

    public function evaluation(Request $request){
     $validateData=$request->validate([
         'evaluation'=>'required',
     ]);
     evaluations::create([
        'content'=>$request->evaluation,
        'user_id'=>Auth::user()->id
    ]);
    return redirect()->route('evaluations');

    }

    public function store(Request $request){
        $validateData=$request->validate([
            'message'=>'required',
        ]);
        Commentaire::create([
            'content'=>$request->message,
            'user_id'=>Auth::user()->id
        ]);
        return redirect()->route('post.index')->with([
            'commentaires'=>Commentaire::all()
        ]);

    }
public function dimenergydoc()
{
    return view('layouts.dimenergydoc');
}
public function dimenergydoc2()
{
    return view('layouts.dimenergydoc2');
}
public function dimenergypv()
{
    return view('layouts.dimenergypv');
}
public function dimenergyeolien()
{
    return view('layouts.dimenergyeolien');
}
public function Aide()
{
    return view('layouts.Aide');
}

public function dashboard()
{
    return view('dashboard');
}
}