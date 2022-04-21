<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceFormRequest;
use Illuminate\Support\Facades\Storage;

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

    public function destroy($id){
        $service = Service::find($id);
        if(Storage::exists($service->image))
        Storage::delete($service->image);
        $service->delete();
        return redirect()->route('admin.service.index');
    }
    public function edit($id){
        $service = Service::find($id);
        return view('admin.services.edit',compact('service'));
    }

    public function update(ServiceFormRequest $request, $id){

        $service = Service::find($id);
        $data = $request->all();

        //Checar se não houve problemas no upload da imagem
        if($request->image->isValid()){
            if(Storage::exists($service->image))
                Storage::delete($service->image);

            $nameFile = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();
           $image = $request->image->storeAs('services', $nameFile);
           $data['image'] = $image;
        }
        $service->update($data);
        //Checar se não houve problemas no upload da imagem
         return redirect()->route('admin.service.index')->with('message','Serviço actualizado com sucesso');
    }
}
