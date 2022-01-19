<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function bubble()
    {
        $array = array(25,11,96,99,50,35);
        $original = $array;
        for ($i = 0; $i < sizeof($array) - 1; $i++) {
            for ($j = 0 ; $j < sizeof($array) - $i - 1; $j++) {
                if ($array[$j] > $array[$j+1]) {
                    $temp           = $array[$j];
                    $array[$j]      = $array[$j + 1];
                    $array[$j + 1]  = $temp;
                }
            }
        }
        $data = [
            'title' => 'BUBBLE',
            'unsorted' => $original,
            'sorted' => $array,
        ];
        return view('view_sorted', $data);
    }

    public function selection()
    {
        $array = array(12,5,15,90,47,35,75,22);
        $original = $array;
        for ($i = 0; $i < sizeof($array) - 1; $i++) {
            $pos = $i;
            for ($j = $i + 1 ; $j < sizeof($array); $j++) {
                if ($array[$pos] > $array[$j]) {
                    $pos = $j;
                }
                if ($pos != $i) {
                    $temp           = $array[$i];
                    $array[$i]      = $array[$pos];
                    $array[$pos]    = $temp;
                }
            }
        }
        $data = [
            'title' => 'SELECTION',
            'unsorted' => $original,
            'sorted' => $array,
        ];
        return view('view_sorted', $data);

    }
}
