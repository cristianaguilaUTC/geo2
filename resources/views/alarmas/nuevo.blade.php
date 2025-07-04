@extends('layout.app')

@section('contenido')
    <h1>Nueva alrma</h1>

    <form action="" id="frm_nueva_alarma">
        <label for=""> <b>No. de Serie:</b></label>
        <input type="text" id="serie" name="serie"
            class="form-control" placeholder="Ingrese serrie...">
        <br>
        <label for=""><b>Responsable</b></label>
        <input type="text" id="reponsable" name="responsable"
            class="form-control" placeholder="Ingrese los apellidos y nombres">
        <br>
        <label for=""><b>Tipo:</b></label>
        <select name="tipo" id="tipo" class="form-control">
            <option value="">--Seleccione--</option>
            <option value="PUBLICA"> ALARMA PÚBLICA </option>
            <option value="PRIVADA"> ALARMA PRIVADA </option>
        </select>
        <br>
        <label for=""><b>Radio Sonoro</b></label>
        <input type="number" name="radio" id="radio" class="form-control" placeholder="Ingrese radio..">
        <br>
        <label for=""><b>Ubicación de la Alarma</b></label><br>
        <br>
        <div id="mapa1"
         style="border: 2px solid black; height: 300px; width: 100%;"></div>
         <br>
         <button class="btn btn-succes">Guardar</button>
         &nbsp;&nbsp;&nbsp;&nbsp;
         <button class="btn -btn-primary">Graficar</button>
         &nbsp;&nbsp;&nbsp;&nbsp;
         <button class="btn -btn-danger">Cancelar</button>



    </form>
@endsection