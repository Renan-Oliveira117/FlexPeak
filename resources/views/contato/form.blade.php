@extends('layout.master')

@section('titulo','Cadastra Contato')

@section('conteudo')


<form method='post'>
  @csrf

  @if(isset($contato))
  @method('PUT')
  @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" name="nome" value="{{$contato->nome ?? null}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefone</label>
    <input type="text" class="form-control" name="telefone" value="{{$contato->telefone ?? null}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">CPF</label>
    <input type="text" class="form-control" name="cpf" value="{{$contato->cpf ?? null}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Rua</label>
    <input type="text" class="form-control" name="rua" value="{{$contato->rua ?? null}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cidade</label>
    <input type="text" class="form-control" name="cidade" value="{{$contato->cidade ?? null}}">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

{{--@if(isset($contato))
<form action="/contatos/{{$contato->id}}" method= "POST">
@csrf
@method ('DELETE')
<button type="submit" class="btn btn-danger">Excluir</button>

</form>
@endif--}}
@endsection