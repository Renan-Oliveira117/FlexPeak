@extends('layout.master')

@section('titulo','Cadastra Contato')

@section('conteudo')

<h1>Formulário de Contato</h1>

<!-- Formulario para criação e edição de contado-->

<form method='post'>
  @csrf

  @if(isset($contato))
  @method('PUT')
  @endif
  <div class="container-fluid">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder=" DIGITE NOME"  value="{{$contato->nome ?? null}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefone</label>
    <input type="text" class="form-control" name="telefone" placeholder=" DIGITE TELEFONE" value="{{$contato->telefone ?? null}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CPF</label>
    <input type="text" class="form-control" name="cpf" placeholder=" DIGITE SOMENTE OS 11 NUMERO" value="{{$contato->cpf ?? null}}">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Rua</label>
    <input type="text" class="form-control" name="rua" placeholder="DIGITE RUA" value="{{$contato->rua ?? null}}">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Cidade</label>
    <input type="text" class="form-control" name="cidade" placeholder=" DIGITE CIDADE" value="{{$contato->cidade ?? null}}">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
  <a class="btn btn-warning" href="/contatos">Cancelar</a>

</div>
</form>
{{--@if(isset($contato))
<form action="/contatos/{{$contato->id}}" method= "POST">
@csrf
@method ('DELETE')
<button type="submit" class="btn btn-danger">Excluir</button>

</form>
@endif--}}
@endsection