@extends('adminlte::layouts.app')

@section('contentheader_title')
<h1>hoggla</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>TEST</h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Lugar</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Autor</th>
            </tr>
            @foreach($trainingSessions as $trainingSession)
                <td>{{$trainingSession->id}}</td>
                <td>{{$trainingSession->training_type_id}}</td>
                <td>{{$trainingSession->training_place_id}}</td>
                <td>{{$trainingSession->training_stage_id}}</td>
                <td>{{$trainingSession->scheduled_date_time}}</td>
                <td>{{$trainingSession->created_by}}</td>
            @endforeach
        </table>
    </div>
@stop