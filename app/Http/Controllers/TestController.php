<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $a = ["1", "5", "3", "9", "12", "43", "1", "4", "10"];
        $b = ["1", "2", "3", "4", "5", "6", "7", "8"];
        // dd($a);
        for ($i = 0; $i < 8; $i++) {
            for ($j = $i + 1; $j < 9; $j++) {
                if ($a[$i] < $a[$j]) {
                    $temp = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $temp;
                }
            }
        }
        // dd($a);
        for ($i = 0; $i < 7; $i++) {
            $c[$i] = $a[$i] + $b[$i];
        }
        dump($c);
        for ($i = 0; $i < 7; $i++) {
            for ($j = $i + 1; $j < 7; $j++) {
                if ($c[$i] > $c[$j]) {
                    $temp = $c[$i];
                    $c[$i] = $c[$j];
                    $c[$j] = $temp;
                }
            }
        }
        dd($c);
    }
}
