@extends('layouts.admin.main')
@section('title','Criar Serviços')
@section('title-dash','Serviços')
@section('sub-dash','Cadastrar Serviços')
@section('content')
<!-- Admit Form Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Adicionar novos serviços</h3>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">...</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-times text-orange-red"></i>Close</a>
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                </div>
            </div>
        </div>




        <form class="new-added-form" action="{{route('admin.service.save')}}" method="POST" enctype="multipart/form-data">
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
            @endif

            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Titulo</label>
                    <input type="text" placeholder="Titulo do serviço" class="form-control" name="title">
                </div>

                <div class="col-lg-6 col-12 form-group ">
                    <label class="text-dark-medium">Imagem de capa (150px X 150px)</label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <div class="col-lg-6 col-12 form-group">
                    <label>Descrição</label>
                    <textarea class="textarea form-control"  name="description" id="form-message" cols="10"
                        rows="9" placeholder="Descrição do serviço" ></textarea>
                </div>

                <div class="col-12 form-group mg-t-8">
                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Salvar</button>
                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
