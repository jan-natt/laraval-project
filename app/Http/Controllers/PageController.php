<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function article()
    {
        return view('testview', ['myarticle'=>'passing article to view']); 
    }
}
