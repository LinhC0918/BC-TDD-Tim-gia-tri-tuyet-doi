<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsoluteNumberController extends Controller
{


    public function absolute($x)
    {
        return abs($x);
    }


}
