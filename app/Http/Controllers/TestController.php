<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() {
        $groupes = ['W-1941', 'W-1942', 'P-1941', 'P-1942', 'P-1943'];

        $spec = 'Administrarea aplicatiilor web';

        return view('test', ['groupe' => $groupes, 'spec' => $spec]);
    }

    public function newMethod() {
        $res = 0;

        for($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                $res += $i;
            }
            echo $res;
        }

        return $res;

    }
}

// De creat o metoda in controller sa calculeze suma numerelor impare
// Parametrii rute
