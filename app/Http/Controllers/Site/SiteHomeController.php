<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class SiteHomeController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('site.home.index', compact('services'));
    }
}
