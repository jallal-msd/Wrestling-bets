<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wrestlers;
use App\Models\User;

class WrestlersController extends Controller
{
    public function index(){
      $wrestlers =Wrestlers::latest()->orderBy('price','desc')->get();
      return view('welcome' , [
        'wreslters' => $wrestlers,
      ]);
    }

    public function create(){
      return view('create' );
    }

     public function bet(){
            $wrestler = Wrestlers::all();
              return view('bet' , [
               'wrestlers' => $wrestler,
        ]);
    }
}
