@extends('templates.website')
@section('content')
        <div class="container">
            <div class="row acceder">
                <p><center><h3>Iniciar sesión</h3></center></p>
                <form method="post" action="/login" class="col s12">
                {{ csrf_field() }}
                    <div class="row acceder">
                        <div class="input-field col s6">
                            <input type="email" class="validate" name="email">
                            <label>email</label>
                        </div>
                    </div>
                    <div class="row acceder">
                        <div class="input-field col s6">
                            <input type="password" class="validate" name="password">
                            <label>Contraseña</label>
                        </div>
                    </div>
                    <div class="row acceder">
                        <a href="/">
                        <input type="button" class="waves-effect waves-light btn" value="Cancelar"></a>
                        <input type="submit" class="waves-effect waves-light btn" value="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>
@stop