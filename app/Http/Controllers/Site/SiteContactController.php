<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteContactController extends Controller
{
    public function index(){
        return view('site.contact.index');
    }
}

