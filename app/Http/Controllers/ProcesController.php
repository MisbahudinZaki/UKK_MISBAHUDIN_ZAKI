<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function index(){
        return view('kalkulator.index');
    }
    public function input(Request $request){
        $a=$request->angka1;
        $b=$request->angka2;
        $opr=$request->operator;
        $hasil=$request->hasil;

        if($opr == "kali"){
            $hasil = $a*$b;
        }
        elseif($opr == "bagi"){
            if($b == 0){
                $hasil = "pembagian tidak diizinkan";
            }
            else{
                $hasil = $a/$b;
            }
        }
        elseif($opr == "tambah"){
            $hasil = $a+$b;
        }
        elseif($opr == "kurang"){
            $hasil = $a-$b;
        }
        else{
            $hasil = "";
            return redirect()->route('kalkulator');
        }

        return view('kalkulator.hasil', compact('hasil'));
    }

    public function javascript(){
        return view('kalkulator.js');
    }
}
