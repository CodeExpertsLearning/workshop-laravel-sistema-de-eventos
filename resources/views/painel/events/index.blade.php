@extends('layouts.app')

@section('content')
<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Dono do Evento</th>
                <th>Criado em</th>
            </tr>
        </thead>

        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->title}}</td>
                <td>{{$event->description}}</td>
                <td>{{$event->owner->name}}</td>
                <td>{{$event->created_at->format('d/m/Y H:i:s')}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {{$events->links()}}
</div>
@endsection
