<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Fiaiaia Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Fiaiaia Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "COLORROSE adalah sebuah brand kosmetik yang berfokus pada konsep Western Antique. 
            Konsep bergaya antik kebaratan tersebut mengacu pada gaya make-up perempuan Eropa pada masa 1960 
            hingga 1980-an yang memiliki nuansa elegan dan mewah.";
        $viewData["author"] = "Developed by: Lutfia Cholidina";
        return view('home.about')->with("viewData", $viewData);
    }
}
