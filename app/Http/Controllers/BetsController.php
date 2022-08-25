<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bets;
use App\Models\Wrestlers;
use Illuminate\Support\Facades\DB;

class BetsController extends Controller
{

    public function show(){
        $user = auth()->id();
        $wrestler = Wrestlers::get();
        $bets =DB::table('bets')->where('user_id' , $user)->get();

        
        return view('wrestler' , [
            'bets' => $bets,
            'wrestler' =>$wrestler
        ]);
    }
    
    public function store(Request  $request){

       $bet =  $request->validate([
            'amount' =>'required',
            'wrestlers' =>'required'
            
        ]);
     
       $wrsl = Wrestlers::find($bet['wrestlers']);
       
       $bet['user_id'] = auth()->id();
        $bet['wrestler_id'] =$wrsl->id;



       bets::create($bet);
       return  redirect('/');
    } 


    public function destroy(bets $bets){
        

        $bets->delete();
        return redirect('wrs');

    }


}
