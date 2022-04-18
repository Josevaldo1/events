<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteNewsController extends Controller
{
    public function index(){
        return view('site.news.all.index');
    }
    public function single(){
        return view('site.news.single.index');
    }
}
