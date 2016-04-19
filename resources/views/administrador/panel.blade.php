@extends('templates.administrador')
@section('content').
	<div class="container">
            <div class="content">
                <div class="title"><h2>Panel de Administración</h2></div>
                <a href="/administrador/RegistroMascota" class="item">
                    <div class="card-panel grey lighten-4">
                        <div class="row">
                            <div class="col s2">
                                <h3 class="color-item"><b><i class="fa fa-paw"></i></b></h3>
                            </div>
                            <div class="col s10">
                                <h5><strong class="color-item">Registrar Mascota</strong></h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/logout" class="item">
                    <div class="card-panel grey lighten-4">
                        <div class="row">
                            <div class="col s2">
                                <h3 class="color-item"><b><i class="fa fa-sign-out"></i></b></h3>
                            </div>
                            <div class="col s10">
                                <h5><strong class="color-item">Salir</strong></h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
@stop