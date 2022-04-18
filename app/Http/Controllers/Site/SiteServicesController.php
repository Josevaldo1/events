<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteServicesController extends Controller
{
    public function index(){
        return view('site.service.index');
    }
}
