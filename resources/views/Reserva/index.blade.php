@extends('home')



@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>Lista de reservas</h3>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nuevo
        </button>
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Id Habitacion</th>
                        <th scope="col">Id Cliente</th>
                        <th scope="col">Id Servicio</th>
                        <th scope="col">Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservas as $reserva)
                    <tr class="">
                        <td scope="row">{{$reserva->id}}</td>
                        <td>{{$reserva->idHabitacion}}</td>
                        <td>{{$reserva->idCliente}}</td>
                        <td>{{$reserva->idServicio}}</td>
                        <td>{{$reserva->estado}}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$reserva->id}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$reserva->id}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('reserva.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('reserva.create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection