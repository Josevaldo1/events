<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class SiteServicesController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('site.service.index', compact('services'));
    }
}
