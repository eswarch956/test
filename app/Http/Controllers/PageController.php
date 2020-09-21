<?php
namespace App\Http\Controllers;

class PageController extends Controller{

    public $Message = "hello Everyone";

    public function about(){
        return view('about');
    }

    public function hey(){
        return 'hey';
    }

    public function contact(){
        return view('pages.contact');
    }

    public function values(){
        $val = 'hello everyone';
        $val2 = 'Good Morning'; 
        $val = 'some thing ';
        
        $val3 = false;
        $val4 = ['a', 'b','c', 'd'];
        return view('values', ['val' => $val, 'val2' => $val2,'conditional_response' => $val3, 'arr' => $val4 ] );
        // return view('values', [$val, $val2, $val3, $val4])
    }

    public function operations( $operationtype, $operand1, $operand2 ){
        if($operationtype == 'add'){
            $result = $operand1 + $operand2;
            return 'The sum of '.$operand1.' and '.$operand2.' is '.$result;
        }else if($operationtype == 'sub'){
            $result = $operand1 - $operand2;
            return 'The subtraction of '.$operand1.' and '.$operand2.' is '.$result;
        }else if($operationtype == 'mul'){
            $result = $operand1 * $operand2;
            return 'The multiple of '.$operand1.' and '.$operand2.' is '.$result;
        }else if($operationtype == 'div'){
            $result = $operand1 / $operand2;
            return 'The division of '.$operand1.' and '.$operand2.' is '.$result;
        }else if($operationtype == 'mod'){
            $result = $operand1 % $operand2;
            return 'The modules of '.$operand1.' and '.$operand2.' is '.$result;
        }else{
            return 'Invalid Operation type given';
        }

    }

}