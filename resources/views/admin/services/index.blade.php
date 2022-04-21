@extends('layouts.admin.main')
@section('title','Listar serviços')
@section('title-dash','Serviços')
@section('sub-dash','Listar Serviços')
@section('content')

<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Todos Serviços</h3>
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
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Class ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">Pesquisar</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">ID</label>
                            </div>
                        </th>
                        <th>Photo</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Acção</th>
                    </tr>
                </thead>
                <tbody>
                    @if ( $services->count() == 0)
                        <strong>Não existem serviços disponíveis.</strong>
                @else
                    @foreach ( $services as $service)


                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$service->id}}</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="{{url("storage/{$service->image}")}}" alt="{{$service->title}}" style="width: 50px; height:50px;" class="img-fluid rounded"></td>
                        <td>{{$service->title}}</td>
                        <td>{{$service->description}}</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('admin.service.destroy',$service->id)}}"><i
                                            class="fas fa-times text-orange-red"></i> Eliminar</a>
                                    <a class="dropdown-item" href="{{route('admin.service.edit', $service->id)}}"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i> Editar</a>

                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach

                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
