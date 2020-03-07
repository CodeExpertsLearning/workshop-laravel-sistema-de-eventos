@extends('layouts.app')

@section('content')
<form method="post" action="{{route('events.update', $event->id)}}">

    @csrf
    @method("PUT")

    <div class="form-group">
        <label>Nome do Evento</label>
        <input type="text" class="form-control" name="title" value="{{$event->title}}">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" class="form-control" name="description" value="{{$event->description}}">
    </div>

    <div class="form-group">
        <label>Conteúdo</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$event->body}}</textarea>
    </div>

    <div class="form-group">
        <label>Inicio do Evento</label>
        <input type="text" class="form-control" name="start_date" value="{{$event->start_date}}">
    </div>

    <div class="form-group">
        <label>Fim do Evento</label>
        <input type="text" class="form-control" name="end_date" value="{{$event->end_date}}">
    </div>

    <div class="form-group">
        <label></label>
        <button type="submit">Cadastrar</button>
    </div>

</form>
@endsection
