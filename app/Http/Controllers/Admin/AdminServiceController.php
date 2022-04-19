<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceFormRequest;

class AdminServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('admin.services.index',compact('services'));
    }
    public function create(){
        return view('admin.services.create');
    }
    public function store(ServiceFormRequest $request)
    {
        $data = $request->all();

            //Checar se não houve problemas no upload da imagem
            if($request->image->isValid()){
                $nameFile = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();
               $image = $request->image->storeAs('services', $nameFile);
               $data['image'] = $image;
            }

         Service::create($data);
         return redirect()->route('admin.service.create')->with('message','Serviço criado com sucesso');

    }
}
