@extends('layouts.app')
@section('main')
    
    <div class="panel panel-success">
        <div class='panel-heading '><h1>Catalogo</h1></div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
                <div class="w3-container w3-center">
                <table class="table table-striped"> <br>

                     @foreach($catalogo as $catalogo)
                         <div class="nav nav-pills nav-stacked">
                            <a href ="{{ route('catalogo.show', $catalogo)}}" class="list-group-item">
                                <strong>{{ $catalogo->nome }}</strong>
                            <a/>
                         </div>
                     @endforeach   
                 </div>
             </div>
         </div><br>

                <a href ="{{ route('catalogo.create')}}"  class="btn btn-success  btn-sm btn-block">
                    Cadastrar
                </a>
                <a href ="{{ route('home.index')}}"  class="btn btn-primary  btn-sm btn-block">
                    Voltar ao inicio
                </a>
         
            </table>
                

@endsection
