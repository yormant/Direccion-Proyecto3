@extends('layouts.base')
@section('content')
<br>
<div class="row">
    <div class="col bg-primary">
        <br>
         <h1 class="text-center">Dispositivos Moviles</h1>
     </div>    
</div>
<br>
    <div class="row">
        <div class="col text-left">
            <a href="/dispositivos/create" class="btn btn-primary">Nuevo Dispositivo</a>
         </div>
    </div>
    <br> <br>
     <div class="row">
         <div class="col">
             <table class="table table-bordered table-striped">
                 <thead>
                       
                     <th>Id</th>
                     <th>Nombre Dispositivo</th>
                     <th>Precio Dispositivo</th>
                     <th>Descripcion Dispositivo</th>
                     <th>Edita</th>
                     <th>Eliminar</th>
                 </thead>
                 <tbody>
                     @foreach ($dispositivos as $dispositivo)
                         <tr>
                             <td>{{$dispositivo->id}}</td>
                             <td>{{$dispositivo->nombre}}</td>
                             <td>{{$dispositivo->precio}}</td>
                             <td>{{$dispositivo->descripcion}}</td>
                             <td>
                                <a class="btn btn-success" href="">Edit</a>
                             </td>
                             <td>
                                 <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        type="submit"
                                        class="btn btn-danger"
                                        value="Delete"
                                        onclick="return confirm('¿Esta seguro que desea eliminar el recurso?')"
                                    />
                                </form>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
@endsection