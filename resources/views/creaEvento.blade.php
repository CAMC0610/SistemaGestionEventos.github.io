<x-layout-SLGE>
<h1>Creación de evento</h1>

<div style="padding-left: 3em; background-color: blueviolet; color: antiquewhite">
    <form action="nuevoEvento" method="POST">

        @csrf
    
        <label for="nombre_evento">Nombre de el evento: <input class="form-control" type="text" name="nombre_evento" id="nombre_evento" style="width: 110%"></label><br>
    
        <label for="fecha_de_evento">Fecha de el evento: <input class="form-control" type="date" name="fecha_de_evento" style="width: 145%"></label><br>
    
        <label for="hora_inicio_evento">Hora de inicio del evento: <input class="form-control" type="time" name="hora_inicio_evento" style="width: 130%"></label><br>
    
        <label for="hora_finalizacion_evento">Hora de finalización del evento: <input class="form-control" type="time" name="hora_finalizacion_evento" style="width: 105%"></label><br>
    
        <label for="ubicaion_evento">Ubicaion del evento: <input class="form-control" type="text" name="ubicaion_evento" id="ubicaion_evento" style="width: 110%"></label><br>
    
        <label for="tipo_evento">Tipo de evento: </label>
        <select class="form-control" name="tipo_evento" id="tipo_evento" style="width: 16%">
            <option value="Acádemico">Acádemico</option>
            <option value="Recreativo">Recreativo</option>
            <option value="Deportivo">Deportivo</option>
            <option value="Otro">Otro</option>
        </select>
    
        <button type="submit" class="btn btn-success" style="margin-top: 1em">Crear evento</button>
            
    </form>
</div>
</x-layout-SLGE>