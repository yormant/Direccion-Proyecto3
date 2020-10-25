@extends('layouts.base')
@section('content')
<br>
<div class="row">
    <div class="col bg-primary">
        <br>
         <h1 class="text-center">Marcas Moviles</h1>
     </div>    
</div>
<br>
    <div class="row">
        <div class="col text-left">
            <a href="/marcas/create" class="btn btn-primary">Nueva marca</a>
            <a class="btn btn-info" href="/dispositivos">Back</a>

         </div>
    </div>
    <br> <br>
     <div class="row">
         <div class="col">
             <table class="table table-bordered table-striped">
                 <thead>
                       
                     <th>Nombre Marca</th>
                     <th>Descripcion Marca</th>
                     <th>Editar</th>
                     <th>Eliminar</th>
                 </thead>
                 <tbody>
                     @foreach ($marcas as $marca)
                         <tr>
                             <td>{{$marca->name}}</td>
                             <td>{{$marca->description}}</td>
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