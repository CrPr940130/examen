@extends('templates.administrador')
@section('content')
	<div class="container">
           <div class="row registro">
            <p><center><h3>Detalle Mascota</h3></center></p>
                 <div class="row registro">
                 	<?php
                		$mascota = DB::table('mascotas')->where('id',$id)->get();
                		foreach ($mascota as $mascota)?>
                     nombre: {{ $mascota->nombre }} </br>
                     edad: {{ $mascota->edad }} </br>
                     tipo: {{ $mascota->tipo }} </br>
                     color: {{ $mascota->color }} </br>
                 </div>
                 <div class="row registro">
                     <a href="/administrador/RegistroMascota">
                     <input type="button" class="waves-effect waves-light btn" value="Regresar"></a>
                 </div>
         </div>
     </div>
@stop