<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Safe(){
        return response()->json(['msg'=>'You are allow to Enter']);
    }
}
