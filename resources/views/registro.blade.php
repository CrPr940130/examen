@extends('templates.website')
@section('content')
        <div class="container">
            <div class="row registro">
                <p><center><h3>Registrar usuario</h3></center></p>
                <form method="post" action="/registrar" class="col s12">
                {{ csrf_field() }}
                    <div class="row registro">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="nombre">
                            <label>Nombre</label>
                        </div>
                    </div>
                    <div class="row registro">
                        <div class="input-field col s6">
                            <input type="email" class="validate" name="email">
                            <label>email</label>
                        </div>
                    </div>
                    <div class="row registro">
                        <div class="input-field col s6">
                            <input type="password" class="validate" name="password">
                            <label>Contraseña</label>
                        </div>
                    </div>
                    <div class="row registro">
                        <a href="/">
                        <input type="button" class="waves-effect waves-light btn" value="Cancelar"></a>
                        <input type="submit" class="waves-effect waves-light btn" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
@stop