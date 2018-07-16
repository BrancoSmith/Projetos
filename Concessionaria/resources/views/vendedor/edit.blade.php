@extends('layouts.app')
@section('main')
   


   <form action='{{ route('vendedor.update', $vendedor) }}' method='post' class="form-group">
    {{method_field('patch')}}
    {{ csrf_field() }}

    <div class="panel panel-success btn-block">
    <div class="panel-heading"><h1>Editar Dados do Funcionario</h1></div> 
    </div>

    <div class="form-group ">
    <lable for='nome'><strong>Nome</strong> </label>
    <input type='text'  class="form-control" id="nome" name='nome' value="{{$vendedor->nome}}">
    </div>

     <div class="form-group ">
    <lable for='cpf'><strong>Cpf</strong></label>
    <input type='text' name='cpf'  class="form-control" id="cpf" value="{{$vendedor->cpf}}">
    </div>

     <div class="form-group ">
    <lable for='telefone'><strong>Telefone</strong></label>
    <input type='text' name='telefone' class="form-control" id="telefone" value="{{$vendedor->telefone}}">
    </div>

    <button type="submit" class="btn  btn-warning btn-block ">Editar</button>
    <a type="submit" class="btn btn-primary btn-block" href ="{{ route('vendedor.index')}}">Voltar</a>
</form><br>





@endsection
