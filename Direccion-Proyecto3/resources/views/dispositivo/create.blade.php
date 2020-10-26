@extends('layouts.base')

@section('content')
<div class= 'container'>
<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">Nuevo Dispositivo</h1>
    </div>
</div>

<br>
<div class="col">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                - {{$error}} <br>
            @endforeach 
        </div>
    @endif
<div class="row">
<div class="col">
    <form action="/dispositivos" method="POST" style="width:50%; margin-left: 25%; margin-right: 20%;">
        @csrf
        <div class="form-group">
            <label for="name">Identificador</label>
            <input type="number" class="form-control" id="Id" name="Id"  >
        </div>
            <div class="form-group">
            <label for="name">Nombre del Dispositivo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
        </div>
        <div class="form-group">
            <label for="name">Precio </label>
            <input type="text" class="form-control" id="precio" name="precio" >
        </div>
        <div class="form-group">
            <label for="name">Descripcion</label>
            <textarea  name="descripcion" id="descripcion" cols="20" rows="5" class="form-control"></textarea>
        </div>
            <br>
            <br>
            
            <div class="row" style= "margin-left: 30%">
            <div class="col-4 my-2">
        <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
        <div class="col-4 my-2">
        <a href="/dispositivos" class="btn btn-danger btn-block ">Back</a>
        </div>
        </div>
    </form>
</div>
</div>
</body>
</div>

@endsection