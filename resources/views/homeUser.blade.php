
<x-layout-SLGE>
<h1>Sistema de gestión de eventos</h1>
<div>
    <div>
        <table class="table" border="9">
            <thead class="table-dark">
                <tr>
                    <th>ID evento</th>
                    <th>Nombre del evento</th>
                    <th>Fecha</th>
                    <th>Hora de inicio</th>
                    <th>Hora de termino</th>
                    <th>Ubicacion del evento</th>
                    <th>Tipo de evento</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{$evento->id_evento}}</td>
                        <td>{{$evento->nombre_evento}}</td>
                        <td>{{$evento->fecha_de_evento}}</td>
                        <td>{{$evento->hora_inicio_evento}}</td>
                        <td>{{$evento->hora_finalizacion_evento}}</td>
                        <td>{{$evento->ubicaion_evento}}</td>
                        <td>{{$evento->tipo_evento}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">

                                <a href="{{route('evento.editar', $evento)}}" class="list-group-item list-group-item-action active" aria-current="true">>Editar</a>

                                <form action="eventoBorrate" method="POST">
                                    @csrf
                                    <button class="btn btn-danger" type="submit" name="eventoBorrate" id="eventoBorrate" value="{{$evento->nombre_evento}}">Borrar</button>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <form action="newEvento" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Nuevo evento</button>
        </form>
    </div>
</div>
</x-layout-SLGE>
