<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test(){
       $grupe=array("W-1942","W-1941","P-1941","P-1942");
       $specialitatea = "Administrarea aplicatiilor web";
        return View("Test",['grupe'=>$grupe,'specialitatea'=>$specialitatea]);
    }
}
