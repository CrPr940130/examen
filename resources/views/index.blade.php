@extends('templates.website')
@section('content')
        <div class="container">
            <div class="content">
                <div class="title"><h2>Veterinaria Blanca</h2></div>
                <a href="/registro" class="item">
                    <div class="card-panel grey lighten-4">
                        <div class="row">
                            <div class="col s2">
                                <h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
                            </div>
                            <div class="col s10">
                                <h5><strong class="color-item">Registrar Usuario</strong></h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/acceder" class="item">
                    <div class="card-panel grey lighten-4">
                        <div class="row">
                            <div class="col s2">
                                <h3 class="color-item"><b><i class="fa fa-user"></i></b></h3>
                            </div>
                            <div class="col s10">
                                <h5><strong class="color-item">Iniciar sesión</strong></h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
@stop