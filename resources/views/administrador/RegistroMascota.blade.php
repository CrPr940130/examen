@extends('templates.administrador')
@section('content')
        <div class="container">
            <div class="row registro">
                <p><center><h3>Registrar Mascota</h3></center></p>
                <form method="post" action="/registrarMascota" class="col s12">
                {{ csrf_field() }}
                    <div class="row registro">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="nombre">
                            <label>Nombre</label>
                        </div>
                    </div>
                    <div class="row registro">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="edad">
                            <label>edad</label>
                        </div>
                    </div>
                    <div class="row registro">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="tipo">
                            <label>tipo</label>
                        </div>
                    </div>
                    <div class="row registro">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="color">
                            <label>color</label>
                        </div>
                    </div>
                    <div class="row registro">
                        <a href="/administrador">
                        <input type="button" class="waves-effect waves-light btn" value="Cancelar"></a>
                        <input type="submit" class="waves-effect waves-light btn" value="Registrar">
                    </div>
                </form>
            </div>
            <div class="row">
                <p></br><b>Mascotas registradas</b></p>
                <?php
                $mascota = DB::table('mascotas')->get();
                foreach ($mascota as $mascota)
                     echo "<a href='detalle/$mascota->id'>  $mascota->nombre </br></a>"
               ?>
            </div>
        </div>
@stop