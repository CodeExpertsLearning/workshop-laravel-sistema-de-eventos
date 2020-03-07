@extends('layouts.app')

@section('content')
<form method="post" action="{{route('events.store')}}">

    @csrf

    <div class="form-group">
        <label>Nome do Evento</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" class="form-control" name="description">
    </div>

    <div class="form-group">
        <label>Conteúdo</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Inicio do Evento</label>
        <input type="text" class="form-control" name="start_date">
    </div>

    <div class="form-group">
        <label>Fim do Evento</label>
        <input type="text" class="form-control" name="end_date">
    </div>

    <div class="form-group">
        <label></label>
        <button type="submit">Cadastrar</button>
    </div>

</form>
@endsection
