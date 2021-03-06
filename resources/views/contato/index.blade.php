@extends('layout.master')

@section('titulo','Contato')

@section('conteudo') 

<!-- Tela para listar todos os contatos salvos -->
<br>
<h1>LISTA DE CONTATO</h1>
<br>
<div class="col-lg-12" style="text-align: right;">
<a class="btn btn-primary " href="contatos/create">Cadastra Novo</a>
</div>
<br> 

<!--Titulo das colunas da tabelas -->
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">CPF</th>
            <th scope="col">RUA</th>
            <th scope="col">CIDADE</th>
            <th scope="col">AÇÕES</th>
        </tr>
    </thead>
   
        <!-- Retornar todos os contatos salvo-->
        @foreach($contatos as $c)

        {{--Id:{{$c->id}} Nome:{{$c->nome}} - Telefone:{{$c->telefone}} - CPF:{{$c->cpf}} - RUA:{{$c->rua}} - CIDADE:{{$c->cidade}}  --}}

        <tr>
           
            <td>{{$c->id}}</td>
            <td>{{$c->nome}}</td>
            <td>{{$c->telefone}}</td>
            <td>{{$c->cpf}}</td>
            <td>{{$c->rua}}</td>
            <td>{{$c->cidade}}</td>
            <td>

                <a class="btn btn-warning" href="/contatos/edit/{{$c->id}}"> Editar</a>
                <a class="btn btn-danger" href="javascript:excluirContato({{$c->id}})">Excluir</a>
            </td>
        </tr>
        @endforeach
</table>





@endsection

@push('js')
<script>
    // bootbox.alert("Mensagem de teste")
    function excluirContato(id) {
        bootbox.confirm("Deseja mesmo excluir esse contato?", function(sim) {

            if (sim) {
                // bootbox.alert("Deve excluir o cliente com ID:" + id);
                axios.delete('/contato/' + id)
                    .then(function(resposta) {
                        window.location.href = "/contatos";

                    })

                    .catch(function(erro) {
                        bootbox.alert("Ocoreu um erro:" + erro);
                    });

            }
        });
    }
</script>
