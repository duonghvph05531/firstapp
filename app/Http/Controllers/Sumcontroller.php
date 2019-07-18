<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sumcontroller extends Controller
{
    public function sumView(){
        return view('sum-view');
    }
    public function sum(Request $request){
        $data=$request->all();
        $number_1=$data['n_1'];
        $number_2=$data['n_2'];
        $number_3=$data['n_3'];
        $x;
        $x1;
        $x2;
        if($number_1==0){
            $x= -$number_3/$number_2;
        }else{
            $delta= $number_2*$number_2-4*$number_1*$number_3;
            if($delta<0){
                $x='phương trình vô nghiệm';
                return view('output',['ketqua'=>$x]);
            }else if($delta==0){
                $x=$number_2/(2*$number_1);
                return view('output',['ketqua'=>$x]);
            }else{
                $x1=(sqrt($delta)-$number_2)/(2*$number_1);
                $x2=(-$number_2-sqrt($delta))/(2*$number_1);
                return view('output',['ketqua_1'=>$x1],['ketqua_2'=>$x2]);
            }
        }




        return view('output',['ketqua'=>$sum]);
    }
}
