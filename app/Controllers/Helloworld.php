<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($name, $npm)
    {
        // echo $this->name;
        echo $name . "<br>";
        echo $npm . "<br>";
        // echo "Hello Eggy";
    }

    public function show ()
    {
        echo "Eggy Bintang Negara";
        echo "1817051013";
    }
}