<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiCalculateController extends Controller
{
    function bmi(Request $request){
        $age = $request->age;
        $weight = $request->weight;
        $height = $request->height;

        $result = $weight / ($height * $height);
        $bmi = round($result, 2);


        // check and output the answer of calculation

        if($bmi < 16 ){
            return "Severe Thinness and your BMI is : {$bmi}";
        }elseif($bmi >= 16 && $bmi < 17){
            return "Moderate Thinness and your BMI is : {$bmi}";
        }elseif($bmi >= 17 && $bmi < 18.5 ){
            return "Mild Thinness and your BMI is : {$bmi}";
        }elseif($bmi >= 18.5 && $bmi < 25){
            return "Normal and your BMI is : {$bmi}";
        }elseif($bmi >= 25 && $bmi < 30){
            return "Overweight and your BMI is : {$bmi}";
        }elseif($bmi >= 30){
            return "Obese and your BMI is : {$bmi}";
        }
    }
}
