<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function department()
    {
        return view('department');
    }



    public function employee()
    {
        return view('employee');
    }




    

}
